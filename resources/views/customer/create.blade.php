@extends('layouts.app')

@section ('head_title', 'Crea nuovo customer')

@section ('content')

<h1>Crea nuova customer</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('customer.store')}}">
  @csrf
  <div class="mb-3">
    <label for="firstname" class="form-label">Nome customer</label>
    <input type="text" class="form-control" id="firstname" name="firstname"
placeholder="Inserisci firstname" >
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Nome customer</label>
    <input type="text" class="form-control" id="lastname" name="lastname"
placeholder="Inserisci lastname" >
  </div>
  <button class="btn btn-primary">Inserisci </button>
</form>
@endsection

