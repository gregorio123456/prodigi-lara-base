<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    //
    public function prova()
    {
       // echo 'pagina di test';
       return view ('pagina-test');
    }
}
