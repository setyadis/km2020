<?php

namespace App\Models;

use CodeIgniter\Model;

class mwarga extends Model
{
    protected $table = 'tab_kk';

    /* Menampilkan Semua Data Warga*/
    public function getAllWarga($nik = false)
    {
        if ($nik === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['NIK' => $nik]);
        }
    }

    public function getNik($nik = false)
    {
        if ($nik === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['NIK' => $nik]);
        }
    }

    /* Menyimpan Data Warga*/
    public function saveDataWarga($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    /* Update Data Warga*/
    public function updateWarga($data, $nik)
    {
        $query = $this->db->table($this->table)->update($data, array('NIK' => $nik));
        return $query;
    }

    /* Hapus Data Warga*/
    public function hapusWarga($nik)
    {
        $query = $this->db->table($this->table)->delete(array('NIK' => $nik));
        return $query;
    }
}
