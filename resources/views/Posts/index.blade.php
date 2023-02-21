@extends('layouts.plantilla')
@section('title','posts')
@section('content')
<h1>Aqui se mostraran los Posts {{$prueba}}</h1>
<ul>
@foreach ($posts as $item)
    <li>
        {{$item['title']}}   
    </li>
@endforeach
</ul>
@php
 $i=1;   
@endphp

@while ($i < 10)
<p>{{$i}}</p>
@php
    $i++;
@endphp
    
@endwhile

@endsection