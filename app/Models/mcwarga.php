<?php

namespace App\Models;

use CodeIgniter\Model;

class mcwarga extends Model
{
    protected $table = 'tab_kk';

    /* Menampilkan SEMUA DATA*/
    public function getAllWarga($nik = false)
    {
        if ($nik === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['NIK' => $nik]);
        }
    }

    public function getCari($keyword)
    {
        $builder = $this->db->table('tab_kk');
        $builder->select('NIK', 'KK', 'NAMA', 'KELAMIN', 'AGAMA', 'STATUS', 'DUSUN', 'PEKERJAAN');
        $builder->where('NIK', $keyword);
        $builder->orWhere('KK', $keyword);
        return $builder->get();
    }

    /* Menampilkan Total KK*/

    public function getTotalKK()
    {
        $builder = $this->db->query('SELECT DUSUN, COUNT(TKK) AS TOTAL_KK FROM (SELECT DUSUN, KK, COUNT(KK) AS TKK FROM tab_KK GROUP BY DUSUN, KK ORDER BY DUSUN, KK ASC) AS TEMP_TABLE GROUP BY DUSUN ORDER BY DUSUN ASC');
        return $builder;
    }

    /*Menampilkan Total NIK */
    public function getTotalNIK()
    {
        $builder = $this->db->table('tab_kk');
        $builder->select('DUSUN');
        $builder->selectCount('NIK', 'TOTAL_NIK');
        $builder->groupBy('DUSUN');
        $builder->orderBy('DUSUN ASC');
        return $builder->get();
    }

    //SELECT SUM(SKK) AS SUM_KK FROM (SELECT DUSUN, KK, COUNT(KK) AS SKK FROM tab_KK GROUP BY DUSUN, KK ORDER BY DUSUN, KK ASC) AS TEMP_TABLE
    public function getSumKK()
    {
        $builder = $this->db->query('SELECT SUM(TOTAL_KK) AS SUM_KK FROM (SELECT DUSUN, COUNT(TKK) AS TOTAL_KK FROM (SELECT DUSUN, KK, COUNT(KK) AS TKK FROM tab_KK GROUP BY DUSUN, KK ORDER BY DUSUN, KK ASC) AS TABLE_COUNT GROUP BY DUSUN ORDER BY DUSUN ASC) AS TABLE_SUM');
        return $builder;
    }

    public function getSumNIK()
    {
        $builder = $this->db->table('tab_kk');
        $builder->selectCount('NIK', 'TOTAL_NIK');
        return $builder->get();
    }

    /*Cari NIK atau KK*/
    public function getDataWarga($keyword)
    {
        $builder = $this->db->table('tab_kk');
        $builder->select('*');
        $builder->where('NIK, $keyword');
        return $builder->get();
    }
}
