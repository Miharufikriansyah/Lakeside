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
        $DataDebit = $this->request->getVar('DataDebit');
        $keyword = $this->request->getVar('keyword');

        if ($DataDebit) {
            // Jika ada keyword, gunakan method searchAllkredit pada model
            $tanggaldebit = $debitModel->searchAlldebit($DataDebit);
        } else {
            // Jika tidak ada keyword, ambil semua data dari model
            $tanggaldebit = $debitModel->findAll();
        }
        if ($keyword) {
            // Jika ada keyword, gunakan method searchkredit pada model
            $tanggaldebit = $debitModel->searchdebit($keyword);
        } else {
            // Jika tidak ada keyword, ambil semua data dari model
            $tanggaldebit = $debitModel->findAll();
        }

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
        $dataKredit = $this->request->getVar('dataKredit');
        $keyword = $this->request->getVar('keyword');

        if ($dataKredit) {
            // Jika ada dataKredit$dataKredit, gunakan method searchkredit pada model
            $tanggalkredit = $kreditModel->searchAllKredit($dataKredit);
        } else {
            // Jika tidak ada dataKredit$dataKredit, ambil semua data dari model
            $tanggalkredit = $kreditModel->findAll();
        }
        if ($keyword) {
            // Jika ada keyword, gunakan method searchkredit pada model
            $tanggalkredit = $kreditModel->searchkredit($keyword);
        } else {
            // Jika tidak ada keyword, ambil semua data dari model
            $tanggalkredit = $kreditModel->findAll();
        }
        $data = [
            'kredit' => $kreditModel->paginate(7, 'debit'),
            'pager' => $kreditModel->pager,
            'currentPage' => $currentPage
        ];

        return view('/history/historyKredit', $data);
    }
}
