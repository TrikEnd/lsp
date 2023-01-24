<?php

namespace App\Controllers;

class Daftar extends BaseController
{

    protected $daftarModel;

    public function __construct()
    {
        $this->daftarModel = new \App\Models\daftarModel();
    }

    public function index()
    {

        $daftar = $this->daftarModel->getData();

        $data = [
            'title' => 'Daftar',
            'daftar' => $daftar
        ];

        return view('daftar', $data);
    }

    public function save()
    {
        $this->daftarModel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'nik' => $this->request->getVar('nik'),
            'telepon' => $this->request->getVar('telepon'),
            'email' => $this->request->getVar('email'),
        ]);

        return redirect()->to('/daftar');
    }

    public function datadaftar()
    {
        $daftar = $this->daftarModel->getData();

        $data = [
            'title' => 'Data Pendaftaran',
            'daftar' => $daftar
        ];

        return view('datadaftar', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Data Pendaftaran',
            'daftar' => $this->daftarModel->getData($id)
        ];

        return view('detail', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Data Pendaftaran',
            'daftar' => $this->daftarModel->getData($id)
        ];

        session()->setFlashdata('pesan', 'data berhasil di edit!');

        return view('edit', $data);
    }

    public function update($id)
    {
        $this->daftarModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'nik' => $this->request->getVar('nik'),
            'telepon' => $this->request->getVar('telepon'),
            'email' => $this->request->getVar('email'),
        ]);

        return redirect()->to('/datadaftar');
    }

    public function delete($id)
    {
        $this->daftarModel->delete($id);

        session()->setFlashdata('pesan', 'data berhasil di hapus!');

        return redirect()->to('datadaftar');
    }
}
