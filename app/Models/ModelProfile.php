<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfile extends Model
{
    protected $table = "tb_user";
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $allowedFields = ['nm_user', 'username', 'email', 'phone_num', 'password', 'bio', 'gender', 'profile_pic'];

    public function detailData($id_user)
    {
        return $this->db->table('tb_user')
            ->where('id_user', $id_user)
            ->get()->getRowArray();
    }
}
