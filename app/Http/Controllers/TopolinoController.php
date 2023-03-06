<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopolinoController extends Controller
{
    
    public function provaTopolino()
    {
       // echo 'pagina di test';
       return view ('topolino');
    }
}

