@extends('layouts.plantillaPreguntas')

@section('titulo','Añadir')

@section('content')

<div class="container">
    <h2>Nueva Pregunta</h2>
    <!-- Formulario para crear un nuevo registro -->
    <form action='{{url('preguntas')}}' method="POST">
    {!! csrf_field() !!}
      <div class="form-group">
        <label for="nombre">Pregunta:</label>
        <input type="text" class="form-control" name="pregunta" id="pregunta">
      </div>
      <div class="form-group">
          <label for="nombre">Inciso A:</label>
          <input type="text" class="form-control" name="incisoA" id="incisoA">
      </div>
      <div class="form-group">
          <label for="nombre">Inciso B:</label>
          <input type="text" class="form-control" name="incisoB" id="incisoB">
      </div>
      <div class="form-group">
          <label for="nombre">Inciso C:</label>
          <input type="text" class="form-control" name="incisoC" id="incisoC">
      </div>
      <div class="form-group">
          <label for="nombre">Respuesta:</label>
          <input type="text" class="form-control" name="correcta" id="correcta">
      </div>
      <button type="submit" class="btn btn-success">Agregar</button>
    </form>
  </div>

@endsection

