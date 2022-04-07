
@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
  <h1>Página de creación</h1>
  <form action="{{ route('galleries.store') }}" method="POST">

    @csrf

    <label for="name">Nombre:</label><br>
    <input type="text" name="name" id="name" value="{{ old('name') }}">
    <br>

    @error('name')
        <small>*{{ $message }}</small>
        <br>
        <br>
    @enderror

    <label for="description">Descripción:</label><br>
    <textarea name="description" id="description" cols="30" rows="5">{{ old('description') }}</textarea>
    <br>

    @error('description')
        <small>*{{ $message }}</small>
        <br>
        <br>
    @enderror

    <label for="category">Categoría:</label><br>
    <input type="text" name="category" id="category" value="{{ old('category') }}">
    <br>

    @error('category')
        <small>*{{ $message }}</small>
        <br>
        <br>
    @enderror

    <button type="submit">Enviar formulario</button>
  </form>
@endsection