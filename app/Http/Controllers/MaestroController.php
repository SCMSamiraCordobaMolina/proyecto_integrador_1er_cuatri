<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveMaestrosRequest;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Models\Maestro;

class MaestroController extends Controller
{
    public function index()
    {
        $maestros = Maestro::all();
        //dd($estudiantes);
        return view('maestros.index', compact('maestros'));
    }
    public function create(Maestro $maestro)
    {
        return view('maestros.create', compact('maestro'));
    }

    public function store(SaveMaestrosRequest $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'dni' => ['required','min:7','max:8']
        ]);
    

        Maestro::create($request->validated());


        return to_route('maestros.index')->with('status', 'maestro cargado');
    }

    public function edit(Maestro $maestro)
    {
        return view('maestros.edit', compact('maestro'));
    }

    public function update(SaveMaestrosRequest $request, Maestro $maestro)
    {

        $maestro->update($request->validated());
        return to_route('maestros.index')->with('status', 'maestro actualizado');
    }

    public function delete(Maestro $maestro)
    {
        $maestro->delete();

        return to_route('maestros.index')->with('status', 'maestro eliminado!');
    }
}
