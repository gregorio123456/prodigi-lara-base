@extends('layouts.app')
@section('head_title','ordini')
@section('content')

clienti


@endsection
@section('table')
<table class="table">
<thead>
@foreach($nomi as $i=>$nome)
 <tr><th>{{$nome}}</th></tr>

@endforeach
</thead>
</table>
@endsection