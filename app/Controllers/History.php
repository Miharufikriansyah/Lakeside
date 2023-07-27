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
        $currentPage = $this->request->getVar('page_debit') ? $this->request->getVar('page_debit') : 1;
        $debitModel = new DebitModel();
        // $debit = $debitModel->getDebit();
        $data = [
            'debit' => $debitModel->paginate(7, 'debit'),
            'pager' => $debitModel->pager,
            'currentPage' => $currentPage
        ];
        // return view('/history/historyDebit', ['data' => $debit]);
        return view('/history/historyDebit', $data);
    }

    public function Kredit()
    {
        $currentPage = $this->request->getVar('page_debit') ? $this->request->getVar('page_debit') : 1;
        $kreditModel = new KreditModel();
        $data = [
            'kredit' => $kreditModel->paginate(7, 'kredit'),
            'pager' => $kreditModel->pager,
            'currentPage' => $currentPage
        ];
        return view('/history/historyKredit', $data);
    }
}
