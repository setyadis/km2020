<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Data Warga';
        echo view('templates/header', $data);
        echo view('Admin/index');
        echo view('templates/footer');
    }

    //--------------------------------------------------------------------

}
