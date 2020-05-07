<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\mwarga;

class Warga extends Controller
{

    public function index()
    {
        $data['judul'] = 'Data Warga';
        echo view('templates/header', $data);
        $model = new mwarga();
        $data['tdata'] = $model->getAllWarga();
        echo view('warga/index', $data);
        echo view('templates/footer');
    }

    public function vtambah_warga()
    {
        $data['judul'] = 'Tambah Data Warga';
        echo view('templates/header', $data);
        echo view('warga/vtambah_warga');
        echo view('templates/footer');
    }

    public function save()
    {
        $model = new mwarga();
        $data = array(
            'NIK' => $this->request->getPost('nik'),
            'KK' => $this->request->getPost('kk'),
            'NAMA' => $this->request->getPost('nama'),
            'KELAMIN' => $this->request->getPost('klmn'),
            'DUSUN' => $this->request->getPost('dsn'),
            'RT' => $this->request->getPost('rt'),
            'RW' => $this->request->getPost('rw'),
            'NO_RM' => $this->request->getPost('rm'),
            'TPT_LAHIR' => $this->request->getPost('tl'),
            'TGL_LAHIR' => $this->request->getPost('tgl'),
            'AGAMA' => $this->request->getPost('agama'),
            'PENDIDIKAN' => $this->request->getPost('pendidikan'),
            'PEKERJAAN' => $this->request->getPost('pekerjaan'),
            'GOLDAR' => $this->request->getPost('goldar'),
            'STS_PERKAWINAN' => $this->request->getPost('status'),
            'TGL_PERKAWINAN' => $this->request->getPost('tpk'),
            'HUB_KELUARGA' => $this->request->getPost('shdk'),
            'KEWARGANEGARAAN' => $this->request->getPost('kwg'),
            'PASPOR' => $this->request->getPost('paspor'),
            'KITAP' => $this->request->getPost('kitap'),
            'AYAH' => $this->request->getPost('ayah'),
            'IBU' => $this->request->getPost('ibu')
        );
        $model->saveDataWarga($data);
        return redirect()->to('/warga');
    }

    public function vedit_warga($nik)
    {
        $data['judul'] = 'Mengubah Data Warga';
        echo view('templates/header', $data);
        $model = new mwarga();
        $data['tdata'] = $model->getNik($nik)->getRow();
        echo view('warga/vedit_warga', $data);
        echo view('templates/footer');
    }

    public function update()
    {
        $model = new mwarga();
        $nik = $this->request->getPost('nik');
        $data = array(
            'NIK' => $this->request->getPost('nik'),
            'KK' => $this->request->getPost('kk'),
            'NAMA' => $this->request->getPost('nama'),
            'KELAMIN' => $this->request->getPost('klmn'),
            'DUSUN' => $this->request->getPost('dsn'),
            'RT' => $this->request->getPost('rt'),
            'RW' => $this->request->getPost('rw'),
            'NO_RM' => $this->request->getPost('rm'),
            'TPT_LAHIR' => $this->request->getPost('tl'),
            'TGL_LAHIR' => $this->request->getPost('tgl'),
            'AGAMA' => $this->request->getPost('agama'),
            'PENDIDIKAN' => $this->request->getPost('pendidikan'),
            'PEKERJAAN' => $this->request->getPost('pekerjaan'),
            'GOLDAR' => $this->request->getPost('goldar'),
            'STS_PERKAWINAN' => $this->request->getPost('status'),
            'TGL_PERKAWINAN' => $this->request->getPost('tpk'),
            'HUB_KELUARGA' => $this->request->getPost('shdk'),
            'KEWARGANEGARAAN' => $this->request->getPost('kwg'),
            'PASPOR' => $this->request->getPost('paspor'),
            'KITAP' => $this->request->getPost('kitap'),
            'AYAH' => $this->request->getPost('ayah'),
            'IBU' => $this->request->getPost('ibu')
        );
        $model->updateWarga($data, $nik);
        return redirect()->to('/warga');
    }

    public function hapus($nik)
    {
        $model = new mwarga();
        $model->hapusWarga($nik);
        return redirect()->to('/warga');
    }
}
