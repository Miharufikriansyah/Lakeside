<?php
/* 
Controller Input buat handle hal-hal yang berkaitan dengan input
*/

namespace App\Controllers;

class History extends BaseController
{
    public function index()
    {
        return view('history/history');
    }
}
