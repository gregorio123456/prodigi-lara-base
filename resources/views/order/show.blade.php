@extends('layouts.app')

@section ('head_title', 'Dettaglio categoria')

@section ('content')

<h1>Dettaglio categoria</h1>
<a href="{{route('order.index')}}" class="btn btn-primary">Torna alla lista</a>
<a href="{{route('order.edit',$order)}}" class="btn btn-warning">Modifica</a>
<table class="table">
<thead>
            <tr>
                
                <th scope="col">Code order</th>
                <th scope="col">Total</th>
                
            </tr>
        </thead>
    <tbody>
        <tr>
            <td>{{$order->code}}</td>
            <td>{{$order->total}}</td>
            
        </tr>
    </tbody>
</table>

@endsection

