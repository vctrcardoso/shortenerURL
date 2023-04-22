<?php 

namespace App\Controllers\Short;
use App\Controllers\BaseController;
use App\Models\shortUrlModel;

class ShortenerController extends BaseController {


    public function Shorten()
	{

		$session = session();
		$validation = \Config\Services::validation();
		if ($validation->withRequest($this->request)->run(null, 'url')) {
			$data['error'] = $validation->getErrors();
		} else {
			$model = new shortUrlModel();

			$data['url_orig'] = $this->request->getPost('url');

			if ($session->get('logged_in') == 1) {
				$data['users_id'] = $session->get('id');
			}

			$result = $model->InsertURL($data);
			if ($result) {
				$data['error'] === null;
				$data['short_url'] = base_url($result);
			}

			$session->setFlashdata('success', 'URL encurtada');

			return redirect()->to('getUrls');
			$session->destroy();
		}
	}

	public function Redirect ($url_short)
	{
		if (!$this->request->getUri()->getSegment(1)) {
			redirect(base_url());
		} else {

			$model = new shortUrlModel;

			$res = $model->Unshorten($url_short);
	
			if ($res !== null) {
				return redirect()->to($res);
			}
			
			else{
				$data['error'] = "URL NAO ENCONTRADO";
				$data['short_url'] = null;
				
			}
			
		}
	}


	public function Destroy($id_url){
		$model = new shortURLModel();
		$model->Destroy($id_url);
		session()->setFlashdata('success', 'URL foi excluida.');
		return redirect()->to('getUrls');
	}


    public function viewMyUrls()
	{
		return view('getUrls');
	}

	public function getMyUrls() {
		$models = new shortUrlModel();
		$urls = $models->GetAllUrlsToUser($this->session->get('id'));

		return json_encode($urls);
		
	}


}
