<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeraVistaController extends Controller
{
    //
    public function inicio()
    {
        return view('inicio');
    }
}
