
@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
  <h1>Página de galería</h1>
  <a href="{{ route('galleries.create') }}">Crear foto</a>
  <ul>
    @foreach ($galleries as $photo)
        <li>
          <a href="{{ route('galleries.show', $photo->id) }}">{{ $photo->name }}</a>
        </li>
    @endforeach
  </ul>

  {{ $galleries->links() }}
@endsection