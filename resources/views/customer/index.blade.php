@extends('layouts.app')

@section('head_title', 'Lista customer')

@section('content')
    <h1>Lista customer</h1>

    <div class="mb-4">
        <a href="{{ route('customer.create') }}" class="btn
btn-primary">Aggiungi customer</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome customer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customer as $index => $customers)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ $customers->name }}</td>
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