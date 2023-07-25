<?php
/* 
Controller Input buat handle hal-hal yang berkaitan dengan input
*/

namespace App\Controllers;

class History extends BaseController
{
    public function Debit()
    {
        return view('history/historyDebit');
    }

    public function Kredit()
    {
        return view('history/historyKredit');
    }
}
