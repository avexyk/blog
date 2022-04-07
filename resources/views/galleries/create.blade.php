
@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
  <h1>Página de creación</h1>
  <form action="{{ route('galleries.store') }}" method="POST">

    @csrf

    <label for="name">Nombre:</label><br>
    <input type="text" name="name" id="name">
    <br>

    <label for="description">Descripción:</label><br>
    <textarea name="description" id="description" cols="30" rows="5"></textarea>
    <br>

    <label for="description">Categoría:</label><br>
    <input type="text" name="category" id="category">
    <br>

    <button type="submit">Enviar formulario</button>
  </form>
@endsection