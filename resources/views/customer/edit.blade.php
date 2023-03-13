@extends('layouts.app')

@section ('head_title', 'Modifica customer')

@section ('content')

<h1>Modifica customer</h1>
<a href="{{route('customer.index')}}" class="btn btn-primary">Torna alla lista</a>
<a href="{{route('customer.show',$customer)}}" class="btn btn-info">Dettaglio</a>


@include('partials.form-errors')

<form method="post" action="{{route('customer.update',$customer)}}">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="firstname" class="form-label">firstname</label>
    <input type="text" class="form-control my-2" id="firstname" name="firstname"
placeholder="modifica fistname" value="{{$customer->firstname}}" >
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Lastname</label>
    <input type="text" class="form-control my-2" id="lastname" name="lastname"
placeholder="modifica lastname" value="{{$customer->lastname}}" >
  </div>
  <button class="btn btn-primary">Modifica </button>
</form>
@endsection

