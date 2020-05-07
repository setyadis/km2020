<?php

namespace App\Models;

use CodeIgniter\Model;

class madmin extends Model
{
    protected $table = 'admin';

    /* Menampilkan Semua Data Warga*/
    public function getAmin($user = false)
    {
        if ($user === false) {
            return $this->findAll('10');
        } else {
            return $this->getWhere(['user' => $user]);
        }
    }
}
