<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientiController extends Controller
{
    public function clienti ()
    {
        $ele= ['mario rossi','luigi bianchi'];
        
        return view ('clienti',[
         "nomi"=>$ele
        ]);
       
    }
}
