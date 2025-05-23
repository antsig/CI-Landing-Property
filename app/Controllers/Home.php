<?php

namespace App\Controllers;

use App\Models\Berita_model;
use App\Models\Client_model;
use App\Models\Galeri_model;
use App\Models\Video_model;
use App\Models\Fasilitas_model;
use App\Models\Property_model;
use App\Models\Konfigurasi_model;

class Home extends BaseController
{
    // Homepage
    public function index()
    {
        $m_konfigurasi = new Konfigurasi_model();
        $m_galeri      = new Galeri_model();
        $m_video      = new Video_model();
        $m_client      = new Client_model();
        $m_berita      = new Berita_model();
        $m_fasilitas   = new Fasilitas_model();     // ✅ Tambahkan model fasilitas
        $m_property    = new Property_model();      // ✅ Tambahkan model property

        $konfigurasi   = $m_konfigurasi->listing();
        $slider        = $m_galeri->slider();
        $client        = $m_client->testimoni();
        $berita2       = $m_berita->beranda();
        $galeri        = $m_galeri->galeri();
        $video         = $m_video->video();        // ✅ Ambil data video
        $site          = $m_konfigurasi->listing();
        $fasilitas     = $m_fasilitas->fasilitas(); // ✅ Ambil data fasilitas
        $property      = $m_property->listing();       // ✅ Ambil data property (gunakan method sesuai model kamu)

        $data = [
            'title'       => $konfigurasi['namaweb'] . ' | ' . $konfigurasi['tagline'],
            'description' => $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'    => $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
            'slider'      => $slider,
            'konfigurasi' => $konfigurasi,
            'client'      => $client,
            'berita2'     => $berita2,
            'galeri'      => $galeri,
            'video'       => $video,                // ✅ Kirim data video
            'site'        => $site,
            'fasilitas'   => $fasilitas,            // ✅ Kirim data fasilitas
            'property'    => $property,             // ✅ Kirim data property
            'content'     => 'home/index',
        ];

        echo view('layout/wrapper', $data);
    }
}