<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order= order::all();
        return view('order.index',[
            "order"=>$order,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "code"=>'required',
            "total"=>'required'
        ]);
        order::create([
            "code"=>$validated['code'],
            "total"=>$validated['total']
        ]);
        return redirect(route('order.index'))->with('message','Categoria creata con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('order.show',[
            "order"=>$order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('order.edit',[
            "order"=>$order
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            "code"=>'required',
            "total"=>'required',
            
        ]);
        $invoice->code=$validated['code'];
        $invoice->total=$validated['total'];
        $invoice->save();
        return redirect(route('invoice.index'))->with('message','Categoria modificata con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect(route('order.index'))->with('danger','Categoria eliminata con successo');
    }
}
