<?php

namespace App\Models;

use CodeIgniter\Model;

class Komikmodel extends Model
{
    protected $table = 'komik';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'penulis', 'sampul', 'penerbit', 'slugh'];

    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slugh' => $slug])->first();
    }
}
