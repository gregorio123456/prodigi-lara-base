<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FattureController extends Controller
{
    public function fatture ()
    {
       // echo 'pagina di test';
       return view ('fatture');
    }
}
