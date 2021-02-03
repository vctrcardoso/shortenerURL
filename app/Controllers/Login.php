<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\shortURLModel;

class Login extends BaseController
{
	public function login()
	{
		$data = [];


		if ($this->request->getMethod() === 'post') {
			$validation = \Config\Services::validation();
			if ($validation->withRequest($this->request)->run(null, 'login')) {
				$result = (new LoginModel)->index($this->request->getPost());


				if ($result !== false) {
					session()->set(
						[
							'id'    => $result->id,
							'nome'  => $result->nome,
							'email' => $result->email,
							'logged_in' => TRUE
						]
					);

					return redirect('inicial');
				} else {
					$data =
						[

							'error'  => true,
							'errors' =>
							[
								'A senha inserida está incorreta'
							]
						];
				}
			} else {
				$data =
					[
						'error'  => true,
						'errors' => $validation->getErrors()
					];
			}
		}


		return view('login', $data);
	}

	public function URLs()
	{
		$models = new shortURLModel();
		$urls = $models->GetAllUser($this->session->get('id'));
		$data['urls'] = $urls;
		$data['error'] = null;
		$data['short_url'] = false;
		return view('meuslinks', $data);
	}

	//--------------------------------------------------------------------

}
