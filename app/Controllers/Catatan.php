<?php

namespace App\Controllers;

use App\Models\CatatanModel;

class Catatan extends BaseController
{
    protected $catatanModel;
    public function __construct()
    {
        $this->catatanModel = new CatatanModel();
    }
    public function home()
    {
        $catatan['catatan'] = $this->catatanModel->findAll();
        return view('home', $catatan);
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function save()
    {
        $this->catatanModel->save([
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
        ]);
        return redirect()->to('/');
    }
    public function hapus($id)
    {
        $this->catatanModel->delete($id);
        return redirect()->to('/');
    }
    public function edit($id)
    {
        $data = [
            'catatan' => $this->catatanModel->find($id)
        ];
        return view('edit', $data);
    }

    public function update($id)
    {
        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
        ];
        $this->catatanModel->update($id, $data);
        return redirect()->to('/');
    }
}
