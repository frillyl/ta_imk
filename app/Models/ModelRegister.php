<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRegister extends Model
{
    protected $table = "tb_user";
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $allowedFields = ['id_user', 'nm_user', 'username', 'email', 'phone_num', 'password', 'bio', 'gender', 'profile_pic'];

    public function add($data)
    {
        $this->db->table('tb_user')->insert($data);
    }
}
