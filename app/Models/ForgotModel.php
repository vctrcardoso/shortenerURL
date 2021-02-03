<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class ForgotModel extends Model
{

    protected $table = 'recover_password';
    protected $primarykey = 'forgot_id';
    protected $allowedFields = ['users_id', 'hashp', 'data_at'];
  
    

    public function ForgotPassword($email)
    {
        helper('text');
        $db = db_connect();
        $tbc = $db->table('users');
        $dados = $tbc->select('id')->where(['email' => $email])->get()->getRowArray();
        $myTime = (new Time)->format('Y-m-d H:i:s');
        $hash =  random_string('crypto');
        $db->close();

        $this->insert([
            'users_id' => $dados,
            'data_at' => $myTime,
            'hashp' => $hash
        ]);

        return $hash;
    }

    public function ReturnHash($hash)
    {
        $db = db_connect();
        $builder = $db->table('users')
            ->select('hashp, users_id, id, email, senha')
            ->join('recover_password ', 'id = users_id')
            ->where(['hashp' => $hash])
            ->get()
            ->getResultArray();

            
            
            return $builder;

        $db->close();
       
    }
    public function updatePassword($id, $senha)
    {
        $db = db_connect();
        $senha = password_hash($senha['senha'], PASSWORD_DEFAULT);
        $builder = $db->table('users')
            ->where('id', $id)
            ->set('senha', $senha)
            ->update();
       
        $db->close();
    }
}
