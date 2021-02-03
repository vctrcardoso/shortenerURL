<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class recoverModel extends Model
{

    protected $table = 'recover_password';
    protected $primarykey = 'forgot_id';
    protected $allowedFields = ['users_id', 'hashp', 'data_at'];


    public function getData($forgot_id)
    {
        if ($forgot_id === null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['forgot_id' => $forgot_id])->first();
    }

    public function insertForgot($data)
    {
        if ($this->asArray()->where(['email' => $data])->first()){
            return $this->findAll();
        }
    
        return $this->insert($data);
    }

    public function ReturnHash($hash, $userid){
        return $this->asArray()->where(['hashp' => $hash,'users_id' => $userid])->first();
    }
}
