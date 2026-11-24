@extends('layouts.app')
@section('titulo', 'Llista Administradors')



@section('content')
<a href="{{route('administrators.create')}}"> Nuevo administrador</a>
<table>
    @foreach ($administrators as $administrator)
    <tr>
        <td>{{$administrator->user}}</td>
        <td>{{$administrator->password}}</td>

    </tr>
    @endforeach
    @stop