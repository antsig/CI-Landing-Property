<?php

namespace App\Controllers;

use App\Models\Fasilitas_model;

class Fasilitas extends BaseController
{
    // Galeri
    public function index()
    {
        $m_konfigurasi = new Konfigurasi_model();
        $m_fasilitas      = new Fasilitas_model();
        $konfigurasi   = $m_konfigurasi->listing();
        $fasilitas        = $m_fasilitas->fasilitas();

        $data = ['title'  => 'Fasilitasr',
            'description' => 'Fasilitas ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'    => 'Fasilitas ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
            'fasilitas'      => $fasilitas,
            'konfigurasi' => $konfigurasi,
            'content'     => 'fasilitas/index',
        ];
        echo view('layout/wrapper', $data);
    }
}
