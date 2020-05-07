<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\mcwarga;

class Cariwarga extends Controller
{
    protected $table = 'tab_kk';

    public function index()
    {
        $model = new mcwarga();
        $datakk['totalkk'] = $model->getTotalKK()->getResult();
        $datanik['totalnik'] = $model->getTotalNIK()->getResult();
        $sumkk['sumkk'] = $model->getSumKK()->getResult();
        $sumnik['sumnik'] = $model->getSumNIK()->getResult();
        $data['tdata'] = $model->getAllWarga();
        $jdata['judul'] = 'Data Warga';
        echo view('templates/header', $jdata);
        echo view('Cariwarga/vrcariwarga', $data);
        //$keyword['keyword'] = '$keyword';

        //echo view('Cariwarga/vcariwarga');
        //$model->getDataWarga($keyword);
        /*echo view('Cariwarga/index', $datakk);
        echo view('Cariwarga/vnik', $datanik);
        echo view('Cariwarga/vtotalkk', $sumkk);
        echo view('Cariwarga/vtotalnik', $sumnik);*/
        echo view('templates/footer');
        //return redirect()->to('/vrcariwarga');
    }

    function vcari()
    {
        $model = new mcwarga();
        $data['cdata'] = $model = $this->input->post("keyword");
        $rdata['tdata'] = $model->getCari($data['keyword'])->getResult();
        echo view('Cariwarga/vcari', $rdata);
    }

    /*    public function vrcariwarga($keyword)
    {
        $model = new mcwarga();
        $data['tdata'] = $model->getDataWarga($keyword)->getRow();
        $jdata['judul'] = 'Data Warga';
        echo view('templates/header', $jdata);
        echo view('Cariwarga/vrcariwarga', $data);
        echo view('templates/footer');
    }*/
}
