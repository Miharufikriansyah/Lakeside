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
        $data = [
            $validation = \Config\Services::validation(),
        ];
        return view('input/inputDebit', $data);
    }

    public function SaveDebit()
    {
        if ($this->validate([
            'Jumlah' => [
                'rules' => 'required',
                'errors' => 'Jumlah Tidak Boleh kosong',
            ],
            'date' => [
                'rules' => 'required',
                'errors' => 'Tanggal Tidak Boleh kosong',
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => 'Keterangan Tidak Boleh kosong',
            ],
            'PJ' => [
                'rules' => 'required',
                'errors' => 'PJ Tidak Boleh kosong',
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('Input/Debit')->withInput()->with('validation', $validation);
        }

        $this->debitModel->save([
            'Jumlah' => $this->request->getVar('Jumlah'),
            'Tanggal' => $this->request->getVar('date'),
            'Keterangan' => $this->request->getVar('keterangan'),
            'PJ' => $this->request->getVar('PJ'),
        ]);
        Session()->setFlashdata('Pesan', 'Sukses');
        return redirect()->to('Input/Debit');
    }

    public function Kredit()
    {
        $data = [
            $validation = \Config\Services::validation(),
        ];
        return view('input/inputKredit', $data);
    }

    public function SaveKredit()
    {
        if ($this->validate([
            'Jumlah' => [
                'rules' => 'required',
                'errors' => 'Jumlah Tidak Boleh kosong',
            ],
            'date' => [
                'rules' => 'required',
                'errors' => 'Tanggal Tidak Boleh kosong',
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => 'Keterangan Tidak Boleh kosong',
            ],
            'PJ' => [
                'rules' => 'required',
                'errors' => 'PJ Tidak Boleh kosong',
            ],
            'bukti' => [
                'rules' => 'required|uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]',
                'errors' => 'Gambar Tidak Boleh kosong',
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('Input/Kredit')->withInput()->with('validation', $validation);
        }

        $this->kreditModel->save([
            'Jumlah' => $this->request->getVar('Jumlah') ?? 0,
            'Tanggal' => $this->request->getVar('date'),
            'Keterangan' => $this->request->getVar('keterangan') ?? '',
            'Penanggung Jawab' => $this->request->getVar('PJ'),
            'Bukti' => $this->request->getFile('bukti'),
        ]);

        Session()->setFlashdata('Pesan', 'Sukses');
        return redirect()->to('Input/Kredit');
    }
}
