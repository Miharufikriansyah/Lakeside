<?php

namespace App\Models;

use CodeIgniter\Model;

class DebitModel extends Model
{
    protected $table = "debit";
    protected $primaryKey = 'id_debit';
    protected $useTimestamps = true;
    protected $allowedFields = ['Jumlah', 'Tanggal', 'Keterangan', 'PJ'];

    public function getDebit()
    {
        return $this->findAll();
    }

    public function searchdebit($keyword)
    {
        $builder = $this->table('debit');
        $builder->like('Tanggal', $keyword);
        return $builder;
    }
    public function searchAlldebit($DataDebit)
    {
        $builder = $this->table('debit');
        $builder->like('Jumlah', $DataDebit); // Cari nilai cocok di kolom 'Jumlah'
        $builder->orLike('Tanggal', $DataDebit); // Cari nilai cocok di kolom 'Tanggal'
        $builder->orLike('Keterangan', $DataDebit); // Cari nilai cocok di kolom 'Keterangan'
        $builder->orLike('PJ', $DataDebit); // Cari nilai cocok di kolom 'PJ'
        return $builder;
    }

    public function totalDebit()
    {
        $builder = $this->db->table('debit');
        $builder->selectSum('Jumlah', 'total_debit');
        $totalDebitResult = $builder->get()->getRowArray();
        return $totalDebitResult['total_debit'] ?? 0;
    }
}
