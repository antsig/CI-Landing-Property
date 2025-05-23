<?php

namespace App\Models;

use CodeIgniter\Model;

class Fasilitas_model extends Model
{
    protected $table         = 'fasilitas';
    protected $primaryKey    = 'id_fasilitas';
    protected $allowedFields = ['judul_fasilitas', 'gambar'];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('fasilitas');
        $builder->select('fasilitas.*');
        $builder->orderBy('id_fasilitas', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    // total
    public function total()
    {
        $builder = $this->db->table('fasilitas');
        $query   = $builder->get();

        return $query->getNumRows();
    }


    // tambah
    public function tambah($data)
    {
        $builder = $this->db->table('fasilitas');
        $builder->insert($data);
    }

    // edit
    public function edit($data)
    {
        $builder = $this->db->table('fasilitas');
        $builder->where('id_fasilitas', $data['id_fasilitas']);
        $builder->update($data);
    }

    // galeri
    public function fasilitas()
    {
        $builder = $this->db->table('fasilitas');
        $builder->select('fasilitas.*');
        $builder->orderBy('id_fasilitas', 'DESC');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
