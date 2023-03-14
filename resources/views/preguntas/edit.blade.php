@extends('layouts.plantillaPreguntas')

@section('titulo','Editar')

@section('content')

<div class="container">
    <h1>Editar pregunta</h1>
    <!-- Formulario para crear un nuevo registro -->
    <form action='{{url('preguntas/' . $preguntas->id)}}' method="POST">
    {!! csrf_field() !!}
    @method("PATCH")
      <div class="form-group">
        <label for="nombre">Pregunta:</label>
        <input type="text" class="form-control" name="pregunta" id="pregunta" value="{{$preguntas->pregunta}}">
      </div>
      <div class="form-group">
          <label for="nombre">Inciso A:</label>
          <input type="text" class="form-control" name="incisoA" id="incisoA" value="{{$preguntas->incisoA}}">
      </div>
      <div class="form-group">
          <label for="nombre">Inciso B:</label>
          <input type="text" class="form-control" name="incisoB" id="incisoB" value="{{$preguntas->incisoB}}">
      </div>
      <div class="form-group">
          <label for="nombre">Inciso C:</label>
          <input type="text" class="form-control" name="incisoC" id="incisoC" value="{{$preguntas->incisoC}}">
      </div>
      <div class="form-group">
          <label for="nombre">Respuesta:</label>
          <input type="text" class="form-control" name="correcta" id="correcta" value="{{$preguntas->correcta}}">
      </div>
      <button type="submit" class="btn btn-success">Editar</button>
    </form>
  </div>

@endsection

