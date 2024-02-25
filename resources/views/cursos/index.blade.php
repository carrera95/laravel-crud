@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenido a la pagina index</h1>
    <a href="{{route('cursos.create')}}">Create Course</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso) }}">{{ $curso->name }}</a>
            </li>
        @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection