<?php

namespace App\Controllers;

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
}
