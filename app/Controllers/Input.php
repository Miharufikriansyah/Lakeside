<?php
/* 
Controller Input buat handle hal-hal yang berkaitan dengan input
*/

namespace App\Controllers;

use Config\Session;
use App\Models\DebitModel;
use App\Models\KreditModel;

class Input extends BaseController
{
    protected $debitModel;
    protected $kreditModel;

    public function __construct()
    {
        $this->debitModel = new DebitModel();
        $this->kreditModel = new KreditModel();
    }

    public function Debit()
    {
        return view('input/inputDebit');
    }

    public function SaveDebit()
    {
        $this->debitModel->save([
            'Jumlah' => $this->request->getVar('Jumlah') ?? 0,
            'Tanggal' => $this->request->getVar('date'),
            'Keterangan' => $this->request->getVar('keterangan') ?? '',
            'PJ' => $this->request->getVar('PJ'),
        ]);
        Session()->setFlashdata('Pesan', 'Sukses');
        return redirect()->to('Input/Debit');
    }

    public function Kredit()
    {
        return view('input/inputKredit');
    }

    public function SaveKredit()
    {
        $this->kreditModel->save([
            'Jumlah' => $this->request->getVar('Jumlah') ?? 0,
            'Tanggal' => $this->request->getVar('date'),
            'Keterangan' => $this->request->getVar('keterangan') ?? '',
            'Penanggung Jawab' => $this->request->getVar('PJ'),
            'Bukti' => $this->request->getVar('bukti'),
        ]);
        Session()->setFlashdata('Pesan', 'Sukses');
        return redirect()->to('Input/Kredit');
    }
}
