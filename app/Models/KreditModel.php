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
    public function totalKredit()
    {
        $builder = $this->table('kredit');
        $builder->selectSum('Jumlah');
        $totalkredit = $builder->get();
        return $totalkredit;
    }
}
