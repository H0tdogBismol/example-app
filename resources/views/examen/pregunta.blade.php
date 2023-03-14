@extends('layouts.plantillaExamen')

@section('titulo','Examen')

@section('content')
    <h2>{{$preguntas->pregunta}}</h2>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="respuesta" id="A" value="A">
            <label class="form-check-label" for="A">
                {{$preguntas->incisoA}}
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="respuesta" id="B" value="B">
            <label class="form-check-label" for="B">
                {{$preguntas->incisoB}}
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="respuesta" id="C" value="C">
            <label class="form-check-label" for="C">
                {{$preguntas->incisoC}}
            </label>
        </div>
        <div id="verificar">

        </div>
    <br>
    <table>
        <tr>
            <td><button type="input" class="btn btn-success" onclick="validar()">Comprobar</button>
        </td>
            <td>
                @php
                    $aux = (((int)$preguntas->id)+1);
                    $respuesta = $preguntas->respuesta;
                @endphp
                <a href="{{url('/examen/'.$aux.'/edit')}}" class="btn btn-success">Siguiente</a></td>
        </tr>
    </table>
    <script>
        const verificar = document.getElementById("verificar");
        const incA = document.getElementById("A");
        const incB = document.getElementById("B");
        const incC = document.getElementById("C");
        function validar() {
            let res = '{{$preguntas->correcta}}';
            let auxiliar = "";
            verificar.innerHTML = "";
            if ((incA.checked & res == "A") | (incB.checked & res == "B") | (incC.checked & res == "C")){
                auxiliar = `<div class="alert alert-success" role="alert">
			                        ¡Respuesta correcta!
		                        </div>`
            } else{
                auxiliar = `<div class="alert alert-danger" role="alert">
			                        ¡Respuesta incorrecta. Por favor, inténtalo de nuevo.
		                        </div>`
            }
            verificar.innerHTML = auxiliar;
        }
    </script>
@endsection


