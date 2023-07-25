<?php

namespace App\Models;

use CodeIgniter\Model;

class KreditModel extends Model
{
    protected $table = "kredit";
    protected $primaryKey = 'id_kredit';
    protected $useTimestamps = true;
    protected $allowedFields = ['Jumlah', 'Tanggal', 'Keterangan', 'Penanggung Jawab', 'Bukti'];

    public function getKredit()
    {
        return $this->findAll();
    }
}
