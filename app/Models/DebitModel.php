<?php

namespace App\Models;

use CodeIgniter\Model;

class DebitModel extends Model
{
    protected $table = "debit";
    protected $primaryKey = 'id_debit';
    protected $useTimestamps = true;
    protected $allowedFields = ['Jumlah_debit', 'Tanggal', 'Keterangan', 'PJ'];

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
        $builder->like('Jumlah_debit', $DataDebit); // Cari nilai cocok di kolom 'Jumlah'
        $builder->orLike('Tanggal', $DataDebit); // Cari nilai cocok di kolom 'Tanggal'
        $builder->orLike('Keterangan', $DataDebit); // Cari nilai cocok di kolom 'Keterangan'
        $builder->orLike('PJ', $DataDebit); // Cari nilai cocok di kolom 'PJ'
        return $builder;
    }

    public function totalDebit()
    {
        return $this->selectSum('Jumlah_debit', 'total_debit')->get()->getRow();
    }
}
