@extends('layouts.app')

@section ('head_title', 'Modifica order')

@section ('content')

<h1>Modifica order</h1>
<a href="{{route('order.index')}}" class="btn btn-primary">Torna alla lista</a>
<a href="{{route('order.show',$order)}}" class="btn btn-info">Dettaglio</a>


@include('partials.form-errors')

<form method="post" action="{{route('order.update',$order)}}">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="code" class="form-label">code</label>
    <input type="text" class="form-control my-2" id="code" name="code"
placeholder="modifica code" value="{{$order->code}}" >
  </div>
  <div class="mb-3">
    <label for="total" class="form-label">Lastname</label>
    <input type="text" class="form-control my-2" id="total" name="total"
placeholder="modifica total" value="{{$order->total}}" >
  </div>
 </div>
  <button class="btn btn-primary">Modifica </button> </div>
</form>
@endsection

