@extends('layouts.app')
@section('titulo', 'Llista Administradors')



@section('content')
<a href="{{route('administrators.create')}}"> Nuevo administrador</a>
<table>
    @foreach ($administrators as $administrator)
    <tr>
        <td>{{$administrator->user}}</td>
        <td>{{$administrator->password}}</td>
        <td><a href="{{route('administrators.edit', $administrator)}}">Editar</a>
            <form action="{{ route('administrators.destroy', $administrator) }}" method="POST"
                onsubmit="return confirm('¿Seguro que quieres eliminar a {{ $administrator->user }}?')">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
    </tr>
    @endforeach
    @stop