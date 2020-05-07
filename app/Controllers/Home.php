<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Home extends BaseController
{
	public function index()
	{

		$data['judul'] = 'Halaman Beranda';
		echo view('templates/header', $data);
		echo view('home/index', $data);
		echo view('templates/footer');
		echo "test";
	}

	//--------------------------------------------------------------------

}
