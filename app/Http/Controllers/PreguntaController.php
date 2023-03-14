<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preguntas = Pregunta::all();
        return view('preguntas.index')->with('preguntas',$preguntas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('preguntas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Pregunta::create($input);
        return redirect('preguntas')->with('flash_message', 'Pregunta añadida');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $preguntas = Pregunta::find($id);
        return view('preguntas.edit')->with('preguntas', $preguntas);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $preguntas = Pregunta::find($id);
        $input = $request->all();
        $preguntas->update($input);
        return redirect('preguntas')->with('flash_message', 'Pregunta actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pregunta::destroy($id);
        return redirect('preguntas')->with('flash_message', 'Pregunta eliminada');
    }
}
