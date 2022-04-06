
@extends('layouts.plantilla')

@section('title', 'Foto '.$photo->name)

@section('content')
  <h1>Título de la foto: {{ $photo->name }}</h1>
  <a href="{{ route('galleries.index') }}">Regresar</a>
  <p><strong>Categoría: </strong>{{ $photo->category }}</p>
  <p>{{ $photo->description }}</p>
@endsection