
@extends('layouts.plantilla')

@section('title', 'Edit')

@section('content')
  <h1>Página de edición</h1>
  <form action="{{ route('galleries.update', $photo) }}" method="POST">

    @csrf
    @method('put')

    <label for="name">Nombre:</label><br>
    <input type="text" name="name" id="name" value="{{ $photo->name }}">
    <br>

    <label for="description">Descripción:</label><br>
    <textarea name="description" id="description" cols="30" rows="5">{{ $photo->description }}</textarea>
    <br>

    <label for="description">Categoría:</label><br>
    <input type="text" name="category" id="category" value="{{ $photo->category }}">
    <br>

    <button type="submit">Editar formulario</button>
  </form>
@endsection