<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Authenticator implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		$type = array_shift($arguments);

		if ($type === 'login') {
			if (session()->id === null && session()->nome === null && session()->email === null) {
				return redirect('login');
			}
		}

		if ($type === 'logout')
		{
			if (session()->id !== null && session()->nome !== null && session()->email !== null)
			{
				return redirect('home');
			}
		}

	}

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{
	}
}
