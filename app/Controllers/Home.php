<?php
/* 
Controller Home untuk handle halaman utama sebelum milih kredit dan debit
*/

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('dashboard');
    }
}
