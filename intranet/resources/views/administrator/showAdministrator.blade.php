@extends('layouts.app')
@section('titulo', 'Llista Administradors')



@section('content')
<table>
    <tr><th>ID</th>      <td>{{$administrator->id}}</td></tr>
    <tr><th>Usuario</th> <td>{{$administrator->user}}</td></tr>
    <tr><th>Creado</th>  <td>{{$administrator->created_at}}</td></tr>
</table>
@endsection