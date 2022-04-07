
@extends('layouts.plantilla')

@section('title', 'Foto '.$gallery->name)

@section('content')
  <h1>Título de la foto: {{ $gallery->name }}</h1>
  <a href="{{ route('galleries.index') }}">Regresar</a>
  <br>
  <a href="{{ route('galleries.edit', $gallery->id ) }}">Editar foto</a>
  <p><strong>Categoría: </strong>{{ $gallery->category }}</p>
  <p>{{ $gallery->description }}</p>

  <form action="{{ route('galleries.destroy', $gallery) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
  </form>
@endsection