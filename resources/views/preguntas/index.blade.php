@extends('layouts.plantillaPreguntas')

@section('titulo','Preguntas')

@section('content')
<div class="container">
    <h2>CRUD</h2>
    <a class="btn btn-success" href='{{url('preguntas/create')}}'>Nueva pregunta</a>
    <a class="btn btn-success" href='{{url('examen')}}'>Contestar</a>
    <hr>
    <!-- Tabla con los registros existentes -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Pregunta</th>
          <th>Inciso A</th>
          <th>Inciso B</th>
          <th>Inciso C</th>
          <th>Respuesta</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($preguntas as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->pregunta }}</td>
          <td>{{ $item->incisoA }}</td>
          <td>{{ $item->incisoB }}</td>
          <td>{{ $item->incisoC }}</td>
          <td>{{ $item->correcta }}</td>
          <td>
            <table>
                <tr>
                    <td>
                        <a href="{{url('/preguntas/' . $item->id . '/edit')}}" class="btn btn-outline-success">Editar</a>
                    </td>
                    <td>
                        <form action="{{url('/preguntas/' . $item->id)}}" method="POST">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-outline-success" onclick="return confirm('¿Seguro que deseas eliminar esta pregunta?')">Borrar</button>
                        </form>
                    </td>
                </tr>
            </table>
          </td>
        </tr>
        @endforeach
        <!-- Aquí se agregan más registros automáticamente -->
      </tbody>
    </table>
  </div>

@endsection
