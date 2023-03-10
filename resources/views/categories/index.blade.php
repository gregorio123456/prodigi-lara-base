@extends('layouts.app')
@section('head_title','lista categorie')
@section('content')
<h1>lista categorie</h1>
<a href="#"class="btn btn-primary">aggiungi categoria</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nome categoria</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $index=> $category)
  <tr>
      <th >{{$index+1}}</th>
      <td>{{$category->name}}</td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection
