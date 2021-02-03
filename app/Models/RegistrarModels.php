<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrarModels extends Model
{

    protected $table = 'users';
    protected $primarykey = 'id';
    protected $allowedFields = ['nome', 'email', 'senha'];



    public function CriarUsers(array $post = [])
    {
        $user = $this->insert([
            'nome'  => $post['nome'],
            'email' => $post['email'],
            'senha' => password_hash($post['senha'], PASSWORD_DEFAULT)
        ]);
        return true;
       
       
    }

    

}  
