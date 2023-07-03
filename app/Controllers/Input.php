<?php
/* 
Controller Input buat handle hal-hal yang berkaitan dengan input
*/

namespace App\Controllers;

class Input extends BaseController
{
    public function Debit()
    {
        return view('input/inputDebit');
    }

    public function Kredit()
    {
        return view('input/inputKredit');
    }
}
