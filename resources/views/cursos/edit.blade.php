@extends('layouts.plantilla')

@section('title', 'Edit')
    
@section('content')
    <h1>Registro nombre: {{ $curso->name }}</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{ old('name', $curso->name)  }}">
        </label>
        @error('name')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <br><br>
        <label>
            Descripcion:
            <textarea name="description" rows="5">{{ old('description', $curso->description) }}</textarea>
        </label>
        @error('description')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <br><br>
        <label for="">
            Categoria
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
        </label>
        @error('categoria')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <button type="submit">Actualizar Registro</button>
    </form>
@endsection