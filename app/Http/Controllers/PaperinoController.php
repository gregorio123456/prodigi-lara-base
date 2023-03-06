<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaperinoController extends Controller
{
    public function provaPaperino()
    {
       // echo 'pagina di test';
       return view ('paperino');
    }
}
