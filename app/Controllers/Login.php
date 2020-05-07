<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\madmin;

class Login extends Controller
{
    public function index()
    {

        helper(['form', 'url']);
        $model = new madmin();
        $data['tdata'] = $model->getAmin();

        if (!$this->validate([])) {
            echo view('/warga/index', [
                'validation' => $this->validator
            ]);
        } else {
            echo view('Admin');
        }
    }
}
