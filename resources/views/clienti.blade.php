@extends('layouts.app')
@section('head_title','ordini')
@section('content')

clienti


@endsection
@section('table')
<table>
 
@foreach($nomi as $nome)
 <tr><td>{{$nome}}</td></tr>

@endforeach
 
</table>
@endsection