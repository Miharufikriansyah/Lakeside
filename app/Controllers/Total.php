<?php
/* 
Controller Input buat handle hal-hal yang berkaitan dengan input
*/

namespace App\Controllers;

class Total extends BaseController
{
    public function index()
    {
        return view('total/total');
    }
}
