<?php
/* 
Controller Input buat handle hal-hal yang berkaitan dengan input
*/

namespace App\Controllers;

use App\Models\DebitModel;
use App\Models\KreditModel;

class Total extends BaseController
{
    protected $debitModel;
    protected $kreditModel;

    public function __construct()
    {
        $this->debitModel = new DebitModel();
        $this->kreditModel = new KreditModel();
    }

    public function index()
    {
        $currentPageDebit = $this->request->getVar('page_debit') ? $this->request->getVar('page_debit') : 1;
        $dataDebit = [
            'debit' => $this->debitModel->paginate(3, 'debit'),
            'pager' => $this->debitModel->pager,
            'currentPage' => $currentPageDebit,
        ];

        $currentPageKredit = $this->request->getVar('page_kredit') ? $this->request->getVar('page_kredit') : 1;
        $dataKredit = [
            'kredit' => $this->kreditModel->paginate(3, 'debit'),
            'pager' => $this->kreditModel->pager,
            'currentPage' => $currentPageKredit,
        ];

        // Ambil nilai total debit dan total kredit dari model
        $totalDebitResult = $this->debitModel->totalDebit();
        $totalKreditResult = $this->kreditModel->totalKredit();

        // Ambil nilai total debit dan total kredit sebagai angka
        $totalDebit = $totalDebitResult->total_debit ?? 0;
        $totalKredit = $totalKreditResult->total_kredit ?? 0;

        // Hitung total
        $total = $totalDebit - $totalKredit;

        return view('total/total', $dataDebit, $dataKredit, $total);
    }
}
