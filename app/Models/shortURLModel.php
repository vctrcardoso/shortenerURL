<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class shortURLModel extends Model
{

    protected $table = 'encurta';
    protected $primarykey = 'id_url';
    protected $allowedFields = ['url_short', 'url_orig', 'created_at', 'users_id'];



    public function InsertURL(array $post = [])
    {
        helper('text');
        $myTime = (new Time)->format('Y-m-d H:i:s');

        $this->insert([
            'url_short' => random_string('alnum'),
            'url_orig' => $post['url_orig'],
            'created_at' => $myTime,
            'users_id' => $post['users_id']
        ]);
    }


    public function Unshorten($url_short)
    {


        $result = $this->select('url_orig')
            ->where(['url_short' => $url_short])
            ->get()
            ->getResultArray();

        return $result[0]['url_orig'];
    }



    public function GetAllUser($user)
    {
        $result = $this->select('*')
            ->where('users_id', $user)
            ->get()
            ->getResultArray();

        if ($result) {
            return $result;
        }
    }

    public function Destroy($id)
    {
        $this->where('id_url', $id);
        $this->delete();
    }
}
