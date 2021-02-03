<?php

namespace App\Controllers;

use App\Models\ForgotModel;
use App\Models\recoverModel;
use App\Models\RegistrarModels;
use App\Models\Updatemodel;
use App\Models\Updatepass;

class ForgotPass extends BaseController
{

    public function index()
    {
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            if ($validation->withRequest($this->request)->run(null, 'recup')) {
                $email = $this->request->getPost('email');
                $forgot = (new ForgotModel)->ForgotPassword($email);
            }
        }

        return view('forgot');
    }


    public function NewPassword($hash)
    {

        /*
            1. A $hash contém o valor aleatório. A partir dela da para obter os dados do usuario.

            2. Uma vez que voc ê tiver o $usuario_id do usuário, vc vai passar ele para a sua view.
        
        */



        $data = [];
        $session = session();
        $model = new ForgotModel();
        $data = $model->ReturnHash($hash);




        session()->set($data[0]);






        return view('NewPassword');
    }


    public function UpdatePass()
    {

        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            if ($validation->withRequest($this->request)->run(null, 'NewPass')) {
                $session = session();
                $model = new ForgotModel();
                $id = $session->get('id');

                $update = $model->updatePassword($id, $this->request->getPost());

                $session->destroy();
            }
        }

        return redirect('loginpage');
    }

    public function Sendmail()
    {
        $data = [];
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            if ($validation->withRequest($this->request)->run(null, 'recup')) {
                $hash = (new ForgotModel)->ForgotPassword($this->request->getPost('email'));
                $email = \Config\Services::email();
                $to = '';
                $link = 'localhost/novasenha/';
                $email->setFrom($to, 'Equipe Encurtador URL');
                $email->setTo($this->request->getPost('email'));
                $email->setSubject('Recuperação de Senha!');
                $message = "Clique aqui para recuperar sua senha <br> <a href=" . base_url('novasenha/') . "/" . $hash;
                $email->setMessage($message);

                if ($email->send()) {
                    $sucess = session()->setFlashdata('sucess', 'Recuperação enviada no E-mail.');
                    return redirect()->to('/');
                } else {
                    $data = $email->printDebugger(['headers']);
                    print_r($data);
                }
            } else {
                $data = [
                    'error' => true,
                    'errors' => $validation->getErrors()
                ];
            }
        }
    }
}
