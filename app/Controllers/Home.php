<?php

namespace App\Controllers;

use App\Models\ForgotModel;
use App\Models\shortURLModel;
use CodeIgniter\Model;

class Home extends BaseController
{
	public function index()
	{
		 if ($this->session->logged_in === true) {
			return view('admin');
		} else {
			return view('index');
		}
		 
	}




	public function admin()
	{


		return view('admin');
	}

	public function Encurta()
	{

		$session = session();
		$validation = \Config\Services::validation();
		if ($validation->withRequest($this->request)->run(null, 'url')) {
			$data['error'] = $validation->getErrors();
		} else {
			$model = new shortURLModel();


			$data['url_orig'] = $this->request->getPost('url');

			if ($session->get('logged_in') == 1) {
				$data['users_id'] = $session->get('id');
			}

			$result = $model->InsertURL($data);
			if ($result) {
				$data['error'] === null;
				$data['short_url'] = base_url($result);
			}

			$session->setFlashdata('sucesso', 'URL encurtada');

			return redirect()->to('admin');
			$session->destroy();
		}
	}

	public function Retornar($url_short)
	{
		if (!$this->request->uri->getSegment(1)) {
			redirect(base_url());
		} else {


			$model = new shortURLModel();

			
			$res = $model->Desencurta($url_short);
	
			if ($res !== null) {
				return redirect()->to($res);
			}
			
			else{
				$data['error'] = "URL NAO ENCONTRADO";
				$data['short_url'] = null;
				
			}
			
		}
	}


	public function excluir($id_url = NULL){
		$model = new shortURLModel();
		$res = $model->Apagar($id_url);
		session()->setFlashdata('sucesso', 'URL foi excluida.');
		return redirect()->to('/');
	}


}
