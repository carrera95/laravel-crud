@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenido a la pagina index</h1>
    <a href="{{route('cursos.create')}}">Create Course</a>
    <ul>
        @foreach ($curso as $item)
            <li>
                <a href="{{ route('cursos.show', $item->id) }}">{{ $item->name }}</a>
            </li>
        @endforeach
    </ul>

    {{ $curso->links() }}
@endsection