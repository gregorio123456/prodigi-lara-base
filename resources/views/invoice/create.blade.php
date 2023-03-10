@extends('layouts.app')

@section ('head_title', 'Crea nuovo invoice');

@section ('content')

<h1>Crea nuovo invoice</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('invoice.store')}}">
  @csrf
  <div class="mb-3">
    <label for="code" class="form-label">Nome invoice</label>
    <input type="text" class="form-control" id="code" name="code"
placeholder="Inserisci nuovo invoice" >
  </div>
  <div class="mb-3">
    <label for="total" class="form-label">Nome customer</label>
    <input type="text" class="form-control" id="total" name="total"
placeholder="Inserisci firstname" >
  </div>
  <div class="mb-3">
    <label for="payment" class="form-label">Nome customer</label>
    <select id="country" name="country">
      <option value="australia">carta</option>
      <option value="canada">bancomat</option>
    </select>
  </div>
  <button class="btn btn-primary">Inserisci </button>
</form>
@endsection

