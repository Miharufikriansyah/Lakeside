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

    public function index()
    {
        return view('history/history');
    }

    public function Hdebit()
    {
        $debitModel = new DebitModel();
        $debit = $debitModel->getDebit();
        return view('/history/history', ['data' => $debit]);
    }

    public function Hkredit()
    {
        $kreditModel = new KreditModel();
        $kredit = $kreditModel->getkredit();
        return view('/history/history', ['data' => $kredit]);
    }
}
