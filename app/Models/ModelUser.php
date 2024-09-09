<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['email', 'username', 'password', 'level'];
    
    public function AllData()
    {
        return $this->findAll();
    }

    public function Tambah($data)
    {
        return $this->insert($data);
    }

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
    
    public function ubahdata($email, $data)
    {
        $this->db->table('user')->where('email', $email)->set($data)->update();
    }

    public function hapusdata($data)
    {
        $this->db->table('user')->where('id', $data['id'])->delete($data);
    }

}