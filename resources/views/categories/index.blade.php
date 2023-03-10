@extends('layouts.app')
@section('head_title','lista categorie')
@section('content')
<h1>lista categorie</h1>
<div class="mb-3">
<a href="{{route('categories.create')}}" class="btn btn-primary" >aggiungi categoria</a>
</div>
@if(session('message') )
<div class="alert alert-success" role="alert">
  {{session('message')}}
</div>
@endif

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
