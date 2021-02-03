<?php

namespace App\Models;

use CodeIgniter\Model;

class Updatemodel extends Model
{
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $allowedFields = ['email', 'senha'];
    public function UpdatePass(array $post = [])
    {

        $data = [
            'senha' => password_hash($post['senha'], PASSWORD_DEFAULT),
            
    ];
    
    $this->where('email', $post['email']);
    $this->update($data);

    }
}
