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

<form method="post" action="{{route('order.store')}}">
  @csrf
  <div class="mb-3">
    <label for="code" class="form-label">code order</label>
    <input type="text" class="form-control" id="code" name="code" placeholder="Inserisci nuovo order" >
  </div>
  <div class="mb-3">
    <label for="total" class="form-label">total</label>
    <input type="text" class="form-control" id="total" name="total" placeholder="Inserisci totale order" >
  </div>
  <button class="btn btn-primary">Inserisci </button>
</form>
@endsection

