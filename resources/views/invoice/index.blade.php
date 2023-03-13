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
                <th scope="col">Total</th>
                <th scope="col">Payment</th>
                <th scope="col">Dettaglio</th>
            <th scope="col">Modifica</th>
            <th scope="col">Cancella</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoice as $index => $invoice)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ $invoice->code }}</td>
                    <td>{{ $invoice->total }}</td>
                    <td>{{ $invoice->payment }}</td>
                    <td>
                    <a href="{{route('invoice.show',$invoice)}}" class="btn btn-info">Dettaglio</a>
                    </td>
                    <td>
                    <a href="{{route('invoice.edit',$invoice)}}" class="btn btn-warning">Modifica</a>
                    </td>
                    <td>
                    <form method="post" action="{{route('invoice.destroy',$invoice)}}">  
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
    <script>
    $('.confirm_delete').click(e=>{
      if(!confirm('sei sicuro di cancellare')){
        e.preventDefault();
      }
    });
  </script>
@endsection