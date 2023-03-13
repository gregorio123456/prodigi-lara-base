@extends('layouts.app')

@section ('head_title', 'Modifica invoice')

@section ('content')

<h1>Modifica invoice</h1>
<a href="{{route('invoice.index')}}" class="btn btn-primary">Torna alla lista</a>
<a href="{{route('invoice.show',$invoice)}}" class="btn btn-info">Dettaglio</a>


@include('partials.form-errors')

<form method="post" action="{{route('invoice.update',$invoice)}}">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="code" class="form-label">code</label>
    <input type="text" class="form-control my-2" id="code" name="code"
placeholder="modifica code" value="{{$invoice->code}}" >
  </div>
  <div class="mb-3">
    <label for="total" class="form-label">Lastname</label>
    <input type="text" class="form-control my-2" id="total" name="total"
placeholder="modifica total" value="{{$invoice->total}}" >
  </div>
  <div class="mb-3">
    <label for="payment" class="form-label">Modalità pagamento</label>
    <select id="payment" name="payment">
      <option value="carta">carta</option>
      <option value="bancomat">bancomat</option>
    </select>
  </div>
  <div class="mb-3">
  <button class="btn btn-primary">Modifica </button>
  </div>
</form>
@endsection

