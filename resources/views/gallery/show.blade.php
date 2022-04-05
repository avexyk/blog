
@extends('layouts.plantilla')

@section('title', 'Foto '.$foto)

@section('content')
  <h1>Título de la foto: {{ $foto }}</h1>
@endsection