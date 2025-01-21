<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return response()->json($estudiantes);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_curso' => 'required|exists:cursos,id',
            'ci' => 'required|string|max:20|unique:estudiantes,ci',
            'nombre' => 'nullable|string|max:100',
            'paterno' => 'nullable|string|max:100',
            'materno' => 'nullable|string|max:100',
            'ciudad' => 'nullable|string|max:100',
            'departamento' => 'nullable|string|max:100',
            'sexo' => 'nullable|in:M,F',
            'correo' => 'required|string|email|max:255',
            'celular' => 'nullable|string|max:15',
            'profesion' => 'nullable|string|max:255',
            'aceptado' => 'nullable|boolean',
        ]);

        $estudiante = Estudiante::create($validated);
        return response()->json($estudiante, 201);
    }

    public function show(Estudiante $estudiante)
    {
        return response()->json($estudiante);
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $validated = $request->validate([
            'id_curso' => 'nullable|exists:cursos,id',
            'ci' => 'nullable|string|max:20|unique:estudiantes,ci,' . $estudiante->id,
            'nombre' => 'nullable|string|max:100',
            'paterno' => 'nullable|string|max:100',
            'materno' => 'nullable|string|max:100',
            'ciudad' => 'nullable|string|max:100',
            'departamento' => 'nullable|string|max:100',
            'sexo' => 'nullable|in:M,F',
            'correo' => 'nullable|string|email|max:255',
            'celular' => 'nullable|string|max:15',
            'profesion' => 'nullable|string|max:255',
            'aceptado' => 'nullable|boolean',
        ]);

        $estudiante->update($validated);
        return response()->json($estudiante);
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return response()->json(['message' => 'Estudiante eliminado correctamente']);
    }
}
