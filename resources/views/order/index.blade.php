@extends('layouts.app')

@section('head_title', 'Lista ordine')

@section('content')
    <h1>Lista ordine</h1>

    <div class="mb-4">
        <a href="{{ route('order.create') }}" class="btn
btn-primary">Aggiungi ordine</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                
                <th scope="col">code order</th>
                <th scope="col">total</th>
                <th scope="col">Total</th>
                <th scope="col">Payment</th>
                <th scope="col">Dettaglio</th>
                <th scope="col">Cancella</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order as $index => $order)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ $order->code }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                    <a href="{{route('order.show',$order)}}" class="btn btn-info">Dettaglio</a>
                    </td>
                    <td>
                    <a href="{{route('order.edit',$order)}}" class="btn btn-warning">Modifica</a>
                    </td>
                    <td>
                    <form method="post" action="{{route('order.destroy',$order)}}">  
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger confirm_delete">Cancella</button>
                </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
@endsection