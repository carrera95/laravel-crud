@extends('layouts.plantilla')

@section('title', 'Curso'.$curso->name)

@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{ route('cursos.index') }}">Regresar</a>
    <a href="{{ route('cursos.edit', $curso) }}">Editar</a>
    <p><strong>Nombre: </strong>{{ $curso->name }}</p>
    <p><strong>Description: </strong>{{ $curso->description }}</p>
    <p><strong>Categoria: </strong>{{ $curso->categoria }}</p>

    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
