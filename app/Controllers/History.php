<?php
/* 
Controller Input buat handle hal-hal yang berkaitan dengan input
*/

namespace App\Controllers;

use App\Models\DebitModel;
use App\Models\KreditModel;

class History extends BaseController
{
    protected $debitModel;
    protected $kreditModel;


    public function Debit()
    {
        $debitModel = new DebitModel();
        $debit = $debitModel->getDebit();
        return view('/history/historyDebit', ['data' => $debit]);
    }

    public function Kredit()
    {
        $kreditModel = new KreditModel();
        $kredit = $kreditModel->getkredit();
        return view('/history/historyKredit', ['data' => $kredit]);
    }
}
