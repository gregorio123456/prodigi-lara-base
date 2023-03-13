@extends('layouts.app')

@section('head_title', 'Lista customer')

@section('content')
    <h1>Lista customer</h1>

    <div class="mb-4">
        <a href="{{ route('customer.create') }}" class="btn btn-primary">Aggiungi customer</a>
        
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome customer</th>
                <th scope="col">Dettaglio</th>
            <th scope="col">Modifica</th>
            <th scope="col">Cancella</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $index => $customer)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ $customer->firstname }}</td>
                    <td>{{ $customer->lastname }}</td>
                    <td>
                    <a href="{{route('customer.show',$customer)}}" class="btn btn-info">Dettaglio</a>
                    </td>
                    <td>
                    <a href="{{route('customer.edit',$customer)}}" class="btn btn-warning">Modifica</a>
                    </td>
                    <td>
                    <form method="post" action="{{route('customer.destroy',$customer)}}">  
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