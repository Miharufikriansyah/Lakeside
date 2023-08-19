<?php

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
        // Pagination untuk model Debit dan Kredit (digabungkan)
        $currentPage = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $perPage = 3;

        $data['records'] = [];

        // Menggabungkan data dari model Debit dan Kredit
        $debitData = $this->debitModel->paginate($perPage, 'page', $currentPage);
        $kreditData = $this->kreditModel->paginate($perPage, 'page', $currentPage);

        foreach ($debitData as $debit) {
            $data['records'][] = [
                'Jumlah_debit' => $debit['Jumlah_debit'],
                'Jumlah_kredit' => null,
                'Keterangan' => $debit['Keterangan'],
                'PJ' => $debit['PJ'],
                'Tanggal' => $debit['Tanggal'],
            ];
        }

        foreach ($kreditData as $kredit) {
            $data['records'][] = [
                'Jumlah_debit' => null,
                'Jumlah_kredit' => $kredit['Jumlah_kredit'],
                'Keterangan' => $kredit['Keterangan'],
                'PJ' => $kredit['PJ'],
                'Tanggal' => $kredit['Tanggal'],
            ];
        }

        // Mengatur data untuk pagination
        $pager = service('pager');
        $pager->setPath('total'); // Sesuaikan dengan URL di route

        $data['pager'] = $pager;
        $data['currentPage'] = $currentPage;

        // Ambil nilai total debit dan total kredit dari model
        $totalDebitResult = $this->debitModel->totalDebit();
        $totalKreditResult = $this->kreditModel->totalKredit();

        // Ambil nilai aktual dari hasil query
        $totalDebit = $totalDebitResult->total_debit;
        $totalKredit = $totalKreditResult->total_kredit;

        // Hitung total
        $data['total'] = $totalDebit - $totalKredit;

        return view('total/total', $data);
    }
}
