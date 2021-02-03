<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoginFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        $type = array_shift($arguments);

        if ($type == 'restrito') {
            if (session()->logged_in !== TRUE) {
                session()->setFlashData('message', 'Faca o Login!');
                return redirect('loginpage');
            }
               
        }
        
       

    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
