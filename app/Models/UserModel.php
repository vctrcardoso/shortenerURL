<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
   
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $allowedFields = ['nome','email', 'senha'];

    public function login(array $post = [])
    {
        $user = $this->where(['email' => $post['email']])->get()->getRow();

        if (!password_verify($post['senha'], $user->senha))
        {
            return false;
        }
        return $user; 
   
    }

    public function register(array $post = [])
    {
        $user = $this->insert([
            'nome'  => $post['nome'],
            'email' => $post['email'],
            'senha' => password_hash($post['senha'], PASSWORD_DEFAULT)
        ]);
        return true;
         
    }

    public function updatePassword(array $post = [])
    {
        $data = [
            'senha' => password_hash($post['senha'], PASSWORD_DEFAULT), 
        ];
    
        $this->where('email', $post['email']);
        $this->update($data);

    }
}
