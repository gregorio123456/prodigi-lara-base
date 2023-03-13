@extends('layouts.app')

@section ('head_title', 'Dettaglio categoria')

@section ('content')

<h1>Dettaglio categoria</h1>
<a href="{{route('customer.index')}}" class="btn btn-primary">Torna alla lista</a>
<a href="{{route('customer.edit',$customer)}}" class="btn btn-warning">Modifica</a>
<table class="table">
    <tbody>
        <tr>
            <td>nome</td>
            <td>{{$customer->firstname}}</td>
            <td>{{$customer->lastname}}</td>
        </tr>
    </tbody>
</table>

@endsection

