<?php

namespace App\Controllers;

use App\Models\Komikmodel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new Komikmodel();
    }

    public function index()
    {
        $data = [
            'tittle' => 'komik',
            'komik' => $this->komikModel->getKomik()
        ];
        return view('komik/index', $data);
    }
    public function detail($slug)
    {
        $data = [
            'tittle' => 'komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];
        // jika tidak ada pake input mnual dari url
        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('judul komik ' . $slug . ' tidak ditemukan');
        }
        return view('komik/detail', $data);
    }
    public function create()
    {
        $data = [
            'tittle' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view('komik/create', $data);
    }
    public function save()
    {
        // validasi
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    'is_unique' => '{field} udah ada'
                ]
            ]
        ])) {
            $validate = \Config\Services::validation();
            return redirect()->to('/komik/create/')->withInput()->with('validation', $validate);
        }
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slugh' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);
        session()->setFlashdata('pesan', 'data berhasil ditambahkan');
        return redirect()->to('/komik');
    }
}
