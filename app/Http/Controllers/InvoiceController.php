<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoice= invoice::all();
        return view('invoice.index',[
            "invoice"=>$invoice,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "code"=>'required',
            "total"=>'required',
            "payment"=>'required'
        ]);
        Invoice::create([
            "code"=>$validated['code'],
            "total"=>$validated['total'],
            "payment"=>$validated['payment']

        ]);
        return redirect(route('invoice.index'))->with('message','Categoria creata con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        return view('invoice.show',[
            "invoice"=>$invoice
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        return view('invoice.edit',[
            "invoice"=>$invoice
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        $validated = $request->validate([
            "code"=>'required',
            "total"=>'required',
            "payment"=>'required'
        ]);
        $invoice->code=$validated['code'];
        $invoice->total=$validated['total'];
        $invoice->payment=$validated['payment'];
        $invoice->save();
        return redirect(route('invoice.index'))->with('message','Categoria modificata con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect(route('invoice.index'))->with('danger','Categoria eliminata con successo');
    }
}
