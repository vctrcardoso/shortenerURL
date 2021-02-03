<?php

namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model{
   
    protected $table = 'users';
    protected $primarykey = 'id';

    public function index(array $post = [])
    {
        $user = $this->where(['email' => $post['email']])->get()->getRow();

        
        if (!password_verify($post['senha'], $user->senha))
        {
            return false;
        }
        return $user; 

       
        
    }
}
