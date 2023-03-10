@extends('layouts.app')
@section('head_title','crea nuova categoria')
@section('content')
<h1>crea nuova categoria</h1>
<form method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Nome categoria</label>
    <input type="text" class="form-control" id="name"placeholder="Inserisci nuova categoria">
  </div>
  <button  class="btn btn-primary">Inserisci</button>
</form>
@endsection