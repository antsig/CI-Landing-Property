<?php

namespace App\Models;

use CodeIgniter\Model;

class Property_model extends Model
{
    protected $table = 'property';
    protected $primaryKey = 'id_property';
    protected $allowedFields = ['judul', 'tipe', 'harga', 'deskripsi', 'gambar', 'tanggal_post'];

    public function listing()
    {
        return $this->orderBy('id_property', 'DESC')->findAll();
    }

    public function total()
    {
        return $this->countAll();
    }

    public function tambah($data)
    {
        return $this->insert($data);
    }

    public function edit($data)
    {
        return $this->update($data['id_property'], $data);
    }
}
