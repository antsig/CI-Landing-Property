<?php

namespace App\Controllers\Admin;

use App\Models\Fasilitas_model;
use CodeIgniter\Controller;

class Fasilitas extends BaseController
{
    // Index
    public function index()
    {
        checklogin();
        $m_fasilitas   = new Fasilitas_model();
        $fasilitas     = $m_fasilitas->listing();
        $total         = $m_fasilitas->total();

        $data = [
            'title'     => 'Fasilitas',
            'fasilitas' => $fasilitas,
            'total'     => $total,
            'content'   => 'admin/fasilitas/index',
        ];
        return view('admin/layout/wrapper', $data);
    }

    // Tambah
    public function tambah()
    {
        checklogin();
        $m_fasilitas = new Fasilitas_model();

        if ($this->request->getMethod() === 'post') {
            $validationRule = [
                'judul_fasilitas' => 'required',
                'gambar' => [
                    'uploaded[gambar]',
                    'is_image[gambar]',
                    'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[gambar,12096]',
                ],
            ];

            if (!$this->validate($validationRule)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $file = $this->request->getFile('gambar');
            if (! empty($_FILES['gambar']['name'])) {
                // Image upload
                $avatar   = $this->request->getFile('gambar');
                $namabaru = str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../assets/upload/image/', $namabaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/image/' . $namabaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../assets/upload/image/thumbs/' . $namabaru);;

                $data = [
                    'judul_fasilitas' => $this->request->getPost('judul_fasilitas'),
                    'gambar'          => $namabaru,
                    'keterangan'     => $this->request->getPost('keterangan'),
                    'tanggal_post'    => date('Y-m-d H:i:s'),
                ];
                $m_fasilitas->tambah($data);

                return redirect()->to(base_url('admin/fasilitas'))->with('sukses', 'Data Berhasil Disimpan');
            }
        }

        $data = [
            'title'   => 'Tambah Fasilitas',
            'content' => 'admin/fasilitas/tambah',
        ];
        return view('admin/layout/wrapper', $data);
    }

    // Edit
    public function edit($id_fasilitas)
    {
        checklogin();
        $m_fasilitas = new Fasilitas_model();
        $fasilitas   = $m_fasilitas->find($id_fasilitas);

        if (!$fasilitas) {
            return redirect()->to(base_url('admin/fasilitas'))->with('error', 'Data tidak ditemukan');
        }

        if ($this->request->getMethod() === 'post') {
            $validationRule = [
                'judul_fasilitas' => 'required',
                'gambar' => [
                    'permit_empty',
                    'is_image[gambar]',
                    'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[gambar,12096]',
                ],
            ];

            if (!$this->validate($validationRule)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $file = $this->request->getFile('gambar');
            if (! empty($_FILES['gambar']['name'])) {
                // Image upload
                $avatar   = $this->request->getFile('gambar');
                $namabaru = str_replace(' ', '-', $avatar->getName());
                $avatar->move(WRITEPATH . '../assets/upload/image/', $namabaru);
                // Create thumb
                $image = \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/image/' . $namabaru)
                    ->fit(100, 100, 'center')
                    ->save(WRITEPATH . '../assets/upload/image/thumbs/' . $namabaru);

                $data = [
                    'id_fasilitas'    => $id_fasilitas,
                    'judul_fasilitas' => $this->request->getPost('judul_fasilitas'),
                    'keterangan'     => $this->request->getPost('keterangan'),
                    'gambar'          => $namabaru,
                ];
            } else {
                $data = [
                    'id_fasilitas'    => $id_fasilitas,
                    'judul_fasilitas' => $this->request->getPost('judul_fasilitas'),
                    'keterangan'     => $this->request->getPost('keterangan'),
                ];
            }

            $m_fasilitas->edit($data);

            return redirect()->to(base_url('admin/fasilitas'))->with('sukses', 'Data berhasil diperbarui');
        }

        $data = [
            'title'     => 'Edit Fasilitas: ' . $fasilitas['judul_fasilitas'],
            'fasilitas' => $fasilitas,
            'content'   => 'admin/fasilitas/edit',
        ];
        return view('admin/layout/wrapper', $data);
    }

    // Delete
    public function delete($id_fasilitas)
    {
        checklogin();
        $m_fasilitas = new Fasilitas_model();
        $fasilitas   = $m_fasilitas->find($id_fasilitas);

        if (!$fasilitas) {
            return redirect()->to(base_url('admin/fasilitas'))->with('error', 'Data tidak ditemukan');
        }

        $m_fasilitas->delete($id_fasilitas);

        return redirect()->to(base_url('admin/fasilitas'))->with('sukses', 'Data telah dihapus');
    }
}
