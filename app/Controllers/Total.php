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
        // Pagination untuk model Debit
        $currentPageDebit = $this->request->getVar('page_debit') ? $this->request->getVar('page_debit') : 1;
        $data['debit'] = $this->debitModel->paginate(3, 'debit');
        $data['pager_debit'] = $this->debitModel->pager;
        $data['currentPage_debit'] = $currentPageDebit;

        // Pagination untuk model Kredit
        $currentPageKredit = $this->request->getVar('page_kredit') ? $this->request->getVar('page_kredit') : 1;
        $data['kredit'] = $this->kreditModel->paginate(3, 'kredit');
        $data['pager_kredit'] = $this->kreditModel->pager;
        $data['currentPage_kredit'] = $currentPageKredit;

        // Ambil nilai total debit dan total kredit dari model
        $totalDebitResult = $this->debitModel->totalDebit();
        $totalKreditResult = $this->kreditModel->totalKredit();

        // Ambil nilai total debit dan total kredit sebagai angka
        $totalDebit = $totalDebitResult->total_debit;
        $totalKredit = $totalKreditResult->total_kredit;

        // Hitung total
        $data['total'] = $totalDebit - $totalKredit;
        dd($totalDebit, $totalKredit);
        return view('total/total', $data);
    }
}
