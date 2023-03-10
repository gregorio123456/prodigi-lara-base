@extends('layouts.app')

@section ('head_title', 'Crea nuovo order');

@section ('content')

<h1>Crea nuovo order</h1>

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
    <label for="name" class="form-label">Nome order</label>
    <input type="text" class="form-control" id="name" name="name"
placeholder="Inserisci nuovo order" >
  </div>
  <button class="btn btn-primary">Inserisci </button>
</form>
@endsection

