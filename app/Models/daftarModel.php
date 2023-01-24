<?php

namespace App\Models;

use CodeIgniter\Model;

class daftarModel extends Model
{
    protected $table = 'pendaftaran';
    protected $useTimeStamps = true;
    protected $allowedFields = ['id', 'nama', 'alamat', 'nik', 'telepon', 'email'];

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
