@extends('layouts.plantillaExamen')

@section('title','Examen')

@section('content')
    <h2>Examen</h2>
        <h5>Por favor conteste las siguientes preguntas</h5>
    <br>
    <a href="{{url('/examen/1/edit')}}" class="btn btn-success">Comenzar</a>
@endsection


