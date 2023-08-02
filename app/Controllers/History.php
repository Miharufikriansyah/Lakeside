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
        $DataDebit = $this->request->getVar('transaksi');
        $keyword = $this->request->getVar('tgl');

        if ($DataDebit) {
            // Jika ada keyword, gunakan method searchAllkredit pada model
            $debit = $debitModel->searchAlldebit($DataDebit);
        } else {
            // Jika tidak ada keyword, ambil semua data dari model
            $debit = $debitModel;
        }
        if ($keyword) {
            // Jika ada keyword, gunakan method searchkredit pada model
            $debit = $debitModel->searchdebit($keyword);
        } else {
            // Jika tidak ada keyword, ambil semua data dari model
            $debit = $debitModel;
        }

        $data = [
            'debit' => $debit->paginate(7, 'debit'),
            'pager' => $debit->pager,
            'currentPage' => $currentPage,
            'transaksi' => $DataDebit,
            'tgl' => $keyword
        ];
        // return view('/history/historyDebit', ['data' => $debit]);
        return view('/history/historyDebit', $data);
    }

    public function Kredit()
    {
        $currentPage = $this->request->getVar('page_debit') ? $this->request->getVar('page_debit') : 1;
        $kreditModel = new KreditModel();
        $dataKredit = $this->request->getVar('transaksi');
        $keyword = $this->request->getVar('tgl');

        if ($dataKredit) {
            // Jika ada dataKredit$dataKredit, gunakan method searchkredit pada model
            $kredit = $kreditModel->searchAllKredit($dataKredit);
        } else {
            // Jika tidak ada dataKredit$dataKredit, ambil semua data dari model
            $kredit = $kreditModel;
        }
        if ($keyword) {
            // Jika ada keyword, gunakan method searchkredit pada model
            $kredit = $kreditModel->searchkredit($keyword);
        } else {
            // Jika tidak ada keyword, ambil semua data dari model
            $kredit = $kreditModel;
        }
        $data = [
            'kredit' => $kredit->paginate(7, 'debit'),
            'pager' => $kredit->pager,
            'currentPage' => $currentPage
        ];

        return view('/history/historyKredit', $data);
    }
}
