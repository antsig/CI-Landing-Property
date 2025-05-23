<?php

namespace App\Controllers\Admin;

use App\Models\Property_model;
use CodeIgniter\Controller;

class Property extends BaseController
{
    public function index()
    {
        checklogin();
        $m_property = new Property_model();
        $property = $m_property->listing();
        $total = $m_property->total();

        $data = [
            'title'    => 'Property',
            'property' => $property,
            'total'    => $total,
            'content'  => 'admin/property/index',
        ];
        return view('admin/layout/wrapper', $data);
    }

    public function tambah()
    {
        checklogin();
        $m_property = new Property_model();

        if ($this->request->getMethod() === 'post') {
            $validationRule = [
                'judul' => 'required',
                'harga' => 'required|numeric',
                'gambar' => [
                    'uploaded[gambar]',
                    'is_image[gambar]',
                    'mime_in[gambar,image/jpeg,image/png,image/gif]',
                    'max_size[gambar,12096]',
                ],
            ];

            if (! $this->validate($validationRule)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $file = $this->request->getFile('gambar');
            $namabaru = date('YmdHis') . '-' . str_replace(' ', '-', $file->getName());
            $file->move(WRITEPATH . '../assets/upload/image/', $namabaru);

            \Config\Services::image()
                ->withFile(WRITEPATH . '../assets/upload/image/' . $namabaru)
                ->fit(300, 200, 'center')
                ->save(WRITEPATH . '../assets/upload/image/thumbs/' . $namabaru);

            $data = [
                'judul'        => $this->request->getPost('judul'),
                'tipe'         => $this->request->getPost('tipe'),
                'harga'        => $this->request->getPost('harga'),
                'deskripsi'    => $this->request->getPost('deskripsi'),
                'gambar'       => $namabaru,
                'tanggal_post' => date('Y-m-d H:i:s'),
            ];
            $m_property->tambah($data);

            return redirect()->to(base_url('admin/property'))->with('sukses', 'Property berhasil ditambahkan');
        }

        $data = [
            'title'   => 'Tambah Property',
            'content' => 'admin/property/tambah',
        ];
        return view('admin/layout/wrapper', $data);
    }

    public function edit($id_property)
    {
        checklogin();
        $m_property = new Property_model();
        $property = $m_property->find($id_property);

        if (!$property) {
            return redirect()->to(base_url('admin/property'))->with('error', 'Data tidak ditemukan');
        }

        if ($this->request->getMethod() === 'post') {
            $validationRule = [
                'judul' => 'required',
                'harga' => 'required|numeric',
                'gambar' => [
                    'permit_empty',
                    'is_image[gambar]',
                    'mime_in[gambar,image/jpeg,image/png,image/gif]',
                    'max_size[gambar,12096]',
                ],
            ];

            if (! $this->validate($validationRule)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $file = $this->request->getFile('gambar');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $namabaru = date('YmdHis') . '-' . str_replace(' ', '-', $file->getName());
                $file->move(WRITEPATH . '../assets/upload/image/', $namabaru);
                \Config\Services::image()
                    ->withFile(WRITEPATH . '../assets/upload/image/' . $namabaru)
                    ->fit(300, 200, 'center')
                    ->save(WRITEPATH . '../assets/upload/image/thumbs/' . $namabaru);

                $data['gambar'] = $namabaru;
            }

            $data['id_property']   = $id_property;
            $data['judul']         = $this->request->getPost('judul');
            $data['tipe']          = $this->request->getPost('tipe');
            $data['harga']         = $this->request->getPost('harga');
            $data['deskripsi']     = $this->request->getPost('deskripsi');

            $m_property->edit($data);
            return redirect()->to(base_url('admin/property'))->with('sukses', 'Data berhasil diperbarui');
        }

        $data = [
            'title'    => 'Edit Property: ' . $property['judul'],
            'property' => $property,
            'content'  => 'admin/property/edit',
        ];
        return view('admin/layout/wrapper', $data);
    }

    public function delete($id_property)
    {
        checklogin();
        $m_property = new Property_model();
        $property = $m_property->find($id_property);

        if (!$property) {
            return redirect()->to(base_url('admin/property'))->with('error', 'Data tidak ditemukan');
        }

        $m_property->delete($id_property);
        return redirect()->to(base_url('admin/property'))->with('sukses', 'Data telah dihapus');
    }
}
