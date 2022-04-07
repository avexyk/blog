
@extends('layouts.plantilla')

@section('title', 'Edit')

@section('content')
  <h1>Página de edición</h1>
  <form action="{{ route('galleries.update', $photo) }}" method="POST">

    @csrf
    @method('put')

    <label for="name">Nombre:</label><br>
    <input type="text" name="name" id="name" value="{{ old('name', $photo->name) }}">
    <br>

    @error('name')
        <small>*{{ $message }}</small>
        <br>
        <br>
    @enderror

    <label for="description">Descripción:</label><br>
    <textarea name="description" id="description" cols="30" rows="5">{{ old('description', $photo->description) }}</textarea>
    <br>

    @error('description')
        <small>*{{ $message }}</small>
        <br>
        <br>
    @enderror

    <label for="category">Categoría:</label><br>
    <input type="text" name="category" id="category" value="{{ old('category', $photo->category) }}">
    <br>

    @error('category')
        <small>*{{ $message }}</small>
        <br>
        <br>
    @enderror

    <button type="submit">Editar formulario</button>
  </form>
@endsection