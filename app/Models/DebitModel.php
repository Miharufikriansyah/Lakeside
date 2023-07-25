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
}
