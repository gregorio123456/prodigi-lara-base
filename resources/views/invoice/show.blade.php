@extends('layouts.app')

@section ('head_title', 'Dettaglio categoria')

@section ('content')

<h1>Dettaglio categoria</h1>
<a href="{{route('invoice.index')}}" class="btn btn-primary">Torna alla lista</a>
<a href="{{route('invoice.edit',$invoice)}}" class="btn btn-warning">Modifica</a>
<table class="table">
<thead>
            <tr>
                
                <th scope="col">Code invoice</th>
                <th scope="col">Total</th>
                <th scope="col">Payment</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <td>{{$invoice->code}}</td>
            <td>{{$invoice->total}}</td>
            <td>{{$invoice->payment}}</td>
        </tr>
    </tbody>
</table>

@endsection

