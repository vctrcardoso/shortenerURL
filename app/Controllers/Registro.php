<?php

namespace App\Controllers;

use App\Models\Registrar;
use App\Models\RegistrarModels;

class Registro extends BaseController
{

    public function Registrar()
    {

        $data = [];
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();

            if ($validation->withRequest($this->request)->run(null, 'signup')) {
                $result = (new RegistrarModels)->CriarUsers($this->request->getPost());
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


}