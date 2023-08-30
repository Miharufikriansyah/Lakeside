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
        $rules = [
            'Jumlah' => 'required',
            'date' => 'required',
            'keterangan' => 'required',
            'PJ' => 'required',
        ];

        $errors = [
            'Jumlah' => [
                'required' => 'Jumlah Tidak Boleh kosong',
            ],
            'date' => [
                'required' => 'Tanggal Tidak Boleh kosong',
            ],
            'keterangan' => [
                'required' => 'Keterangan Tidak Boleh kosong',
            ],
            'PJ' => [
                'required' => 'PJ Tidak Boleh kosong',
            ],
        ];

        if (!$this->validate($rules, $errors)) {
            // Jika validasi gagal, kembali ke halaman input dengan data yang diisi sebelumnya dan pesan validasi
            return redirect()->to('Input/Debit')->withInput();
        }

        $data = [
            'Jumlah_debit' => $this->request->getVar('Jumlah'),
            'Tanggal' => $this->request->getVar('date'),
            'Keterangan' => $this->request->getVar('keterangan') ?? '',
            'PJ' => $this->request->getVar('PJ'),
        ];

        // Simpan data ke database menggunakan model
        $this->debitModel->save($data);

        Session()->setFlashdata('Pesan', 'Data Telah Diinput');
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
                'rules' => 'required|uploaded[bukti]|mime_in[bukti,image/jpg,image/jpeg,image/gif,image/png]',
                'errors' => [
                    'required' => 'Gambar Tidak Boleh kosong',
                    'uploaded' => 'Gagal mengunggah gambar',
                    'mime_in' => 'Format gambar tidak valid (jpg, jpeg, gif, png)'
                ],
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('Input/Kredit')->withInput()->with('validation', $validation);
        }

        // Upload images
        $filesbukti = $this->request->getFile('bukti');
        if ($filesbukti->isValid() && !$filesbukti->hasMoved()) {
            // Pindahkan file ke direktori tujuan (misalnya 'img') dengan nama acak
            $filesbukti->move('img', $filesbukti->getRandomName());

            // Ambil nama file acak yang dihasilkan
            $namebukti = $filesbukti->getName();

            // Upload to database
            $this->kreditModel->save([
                'Jumlah_kredit' => $this->request->getVar('Jumlah') ?? 0,
                'Tanggal' => $this->request->getVar('date'),
                'Keterangan' => $this->request->getVar('keterangan') ?? '',
                'PJ' => $this->request->getVar('PJ'),
                'Bukti' => $namebukti,
            ]);

            Session()->setFlashdata('Pesan', 'Data Telah Diinput');
            return redirect()->to('Input/Kredit');
        } else {
            Session()->setFlashdata('Pesan', 'Gagal mengunggah gambar');
            return redirect()->to('Input/Kredit')->withInput();
        }
    }
}
