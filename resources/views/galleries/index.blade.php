
@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
  <h1>Página de galería</h1>
  <a href="{{ route('galleries.create') }}">Crear foto</a>
  <ul>
    @foreach ($galleries as $gallery)
        <li>
          <a href="{{ route('galleries.show', $gallery) }}">{{ $gallery->name }}</a>
        </li>
    @endforeach
  </ul>

  {{ $galleries->links() }}
@endsection