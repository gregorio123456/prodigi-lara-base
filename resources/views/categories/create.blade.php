@extends('layouts.app')
@section('head_title','crea nuova categoria')
@section('content')
<h1>crea nuova categoria</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('categories.store')}}">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nome categoria</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci nuova categoria" >
  </div>
  <button  class="btn btn-primary">Inserisci</button>
</form>
@endsection