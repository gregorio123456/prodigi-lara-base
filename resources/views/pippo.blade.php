@extends('layouts.app')
@section('head_title','pagina pippo')
@section('content')
<ul>
@php
    /*
    for($i=0;$i< sizeof($nomi);$i++)
    {
        echo '<li>'.$nomi[$i].'</li>';
    }
    
    foreach($nomi as $nome){
        echo '<li>'.$nome.'</li>';
    }
*/

@endphp
@foreach($nomi as $nome)
<li>{{$nome}}</li>
<li><?php echo $nome; ?></li>
@endforeach
</ul>
<ul>
    <li>aaaaaa</li>
    <li>bbbbb</li>
    <li>ccccc</li>
</ul>
@endsection