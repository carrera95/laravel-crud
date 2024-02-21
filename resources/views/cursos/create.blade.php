@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
    <h1>en esta pagina podras crear un curso</h1>
    <form action="{{ route('curso.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
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
            <br>
            <textarea name="description" rows="5">{{ old('description') }}</textarea>
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
            <br>
            <input type="text" name="categoria" value="{{ old('categoria') }}">
        </label>
        @error('categoria')
            <br>
            <span>
                {{ $message }}
            </span>
            <br>
        @enderror
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
