<?php

namespace App\Models;

use CodeIgniter\Model;

class KreditModel extends Model
{
    protected $table = "kredit";
    protected $primaryKey = 'id_kredit';
    protected $useTimestamps = true;
    protected $allowedFields = ['Jumlah', 'Tanggal', 'Keterangan', 'PJ', 'Bukti'];

    public function getKredit()
    {
        return $this->findAll();
    }
    public function saveBukti($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function searchkredit($keyword)
    {
        $builder = $this->table('kredit');
        $builder->like('Tanggal', $keyword);
        return $builder;
    }

    public function searchAllKredit($AlldData)
    {
        $builder = $this->table('kredit');
        $builder->like('Jumlah', $AlldData); // Cari nilai cocok di kolom 'Jumlah'
        $builder->orLike('Tanggal', $AlldData); // Cari nilai cocok di kolom 'Tanggal'
        $builder->orLike('Keterangan', $AlldData); // Cari nilai cocok di kolom 'Keterangan'
        $builder->orLike('PJ', $AlldData); // Cari nilai cocok di kolom 'PJ'
        return $builder;
    }

    public function totalKredit()
    {
        $builder = $this->db->table('kredit');
        $builder->selectSum('Jumlah', 'total_kredit');
        $totalKreditResult = $builder->get()->getRowArray();
        return $totalKreditResult['total_kredit'] ?? 0;
    }
}
