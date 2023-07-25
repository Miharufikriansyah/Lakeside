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

    public function Debit()
    {
        return view('input/inputDebit');
    }

    public function SaveDebit()
    {
        $debitModel = new DebitModel();
        $debitModel->save([
            'Jumlah' => $this->request->getVar('Jumlah') ?? 0,
            'Tanggal' => $this->request->getVar('date'),
            'Keterangan' => $this->request->getVar('Keterangan') ?? '',
            'PJ' => $this->request->getVar('pj'),
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
        $kreditModel = new KreditModel();
        $kreditModel->save([
            'Jumlah' => $this->request->getVar('Jumlah'),
            'Tanggal' => $this->request->getVar('date'),
            'Keterangan' => $this->request->getVar('Keterangan'),
            'Penanggung Jawab' => $this->request->getVar('pj'),
            'Bukti' => $this->request->getVar('proof'),
        ]);
        Session()->setFlashdata('Pesan', 'Sukses');
        return redirect()->to('Input/Kredit');
    }
}
