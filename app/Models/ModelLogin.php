<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    protected $table = "tb_user";
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $allowedFields = ['nm_user', 'username', 'email', 'phone_num', 'password', 'bio', 'gender', 'profile_pic'];

    public function add($data)
    {
        $this->db->table('tb_user')->insert($data);
    }

    public function login_user($username)
    {
        return $this->db->table('tb_user')
            ->where(['username' => $username])
            ->orWhere(['email' => $username])
            ->orWhere(['phone_num' => $username])
            ->get()->getRowArray();
    }
}
