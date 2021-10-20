<?php 

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\RegisterModel;


class AuthController extends BaseController{


    public function register()
    {

        $data = [];
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();

            if ($validation->withRequest($this->request)->run(null, 'signup')) {
                $result = (new RegisterModel)->CriarUsers($this->request->getPost());
                if ($result === null) {
                    $result = [
                        'nome' => $result->nome,
                        'email' => $result->email,
                        'senha' => $result->senha

                    ];
                }
                session()->setFlashdata('sucesso', 'Registrado com Sucesso');
                return redirect('loginpage');
            } else {

                $data =
                    [
                        'error'  => true,
                        'errors' => $validation->getErrors(),

                    ];
            }
        }

        return view('signup', $data);
    }


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
}

?>