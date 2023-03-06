<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdiniController extends Controller
{
    public function ordini ()
    {
       // echo 'pagina di test';
       return view ('ordini');
    }
}
