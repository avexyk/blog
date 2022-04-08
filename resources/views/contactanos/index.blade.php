@extends('layouts.plantilla')

@section('title', 'Contáctanos')

@section('content')
  <h1>Escribir un mensaje</h1>

  <form action="{{ route('contactanos.store') }}" method="POST">

    @csrf

    <label for="name">Nombre</label><br>
    <input type="text" name="name" id="name">
    <br>
    @error('name')
        <p><strong>{{ $message }}</strong></p>
    @enderror

    <label for="correo">Email</label><br>
    <input type="email" name="correo" id="correo">
    <br>
    @error('correo')
        <p><strong>{{ $message }}</strong></p>
    @enderror

    <label for="mensaje">Mensaje</label><br>
    <textarea name="mensaje" id="mensaje" rows="5"></textarea>
    <br>
    @error('mensaje')
        <p><strong>{{ $message }}</strong></p>
    @enderror

    <button type="submit">Enviar mensaje</button>
  </form>

  @if (session('info'))
      <script>
        alert("{{ session('info') }}");
      </script>
  @endif

@endsection
