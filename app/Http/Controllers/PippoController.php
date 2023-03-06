<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PippoController extends Controller
{
    //
    public function provaPippo()
    {
       // echo 'pagina di test';
       $elementi= ['aaaaa','bbbbb','cccccc'];
       return view ('pippo',[
        "nomi"=>$elementi
       ]);
    }
}
