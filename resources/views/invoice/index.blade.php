@extends('layouts.app')

@section('head_title', 'Lista invoice')

@section('content')
    <h1>Lista invoice</h1>

    <div class="mb-4">
        <a href="{{ route('invoice.create') }}" class="btn
btn-primary">Aggiungi invoice</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Code invoice</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoice as $index => $invoice)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ $invoice->code }}</td>
                    <td>{{ $invoice->total }}</td>
                    <td>{{ $invoice->payment }}</td>
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