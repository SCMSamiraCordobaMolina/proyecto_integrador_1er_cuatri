<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveEstudianteRequest;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Models\Maestro;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        //dd($estudiantes);
        return view('estudiantes.index', compact('estudiantes'));
    }
    public function create(Estudiante $estudiante)
    {
        return view('estudiantes.create', compact('estudiante'));
    }

    public function store(SaveEstudianteRequest $request)
    {

        Estudiante::create($request->validated());


        return to_route('estudiantes.index')->with('status', 'estudiante cargado');
    }

    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update(SaveEstudianteRequest $request, Estudiante $estudiantes)
    {
        $estudiantes->update($request->validated());

        return to_route('estudiantes.index')->with('status', 'estudiante actualizado');
    }

    public function delete(Estudiante $estudiante)
    {
        $estudiante->delete();

        return to_route('estudiantes.index')->with('status', 'estudiante eliminado!');
    }
}
