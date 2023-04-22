<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{


	public function register()
	{
		$data = [];

		return view('Auth/signup', $data);
	}
	public function actionRegister()
	{
		$data = [];
		$validation = \Config\Services::validation();

		if ($validation->withRequest($this->request)->run(null, 'signup')) {
			$result = (new UserModel)->register($this->request->getPost());
			if ($result === null) {
				$result = [
					'nome' => $result->nome,
					'email' => $result->email,
					'senha' => $result->senha
				];
			}
			session()->setFlashdata('sucesso', 'Registrado com Sucesso');
			return redirect('login');
		} else {

			$data =
				[
					'error'  => true,
					'errors' => $validation->getErrors(),

				];

			return view('Auth/signup', $data);
		}
	}

	public function login()
	{
		$data = [];

		return view('Auth/login', $data);
	}

	public function actionLogin()
	{
		$data = [];
		$validation = \Config\Services::validation();

		if ($validation->withRequest($this->request)->run(null, 'login')) {
			$result = (new UserModel)->login($this->request->getPost());

			if ($result !== false) {
				session()->set(
					[
						'id'    => $result->id,
						'nome'  => $result->nome,
						'email' => $result->email,
						'logged_in' => TRUE
					]
				);

				return redirect('index');
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

		return view('Auth/login', $data);
	}
}
