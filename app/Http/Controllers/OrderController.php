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
        $order= Category::all();
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
            "name"=>'required'
        ]);
        Category::create([
            "name"=>$validated['name']
        ]);
        return redirect(route('order.index'))->with('message','Categoria creata con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
