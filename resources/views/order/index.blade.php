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
                <th scope="col">#</th>
                <th scope="col">code order</th>
                <th scope="col">total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order as $index => $order)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ $order->code }}</td>
                    <td>{{ $order->total }}</td>
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