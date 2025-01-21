<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return response()->json($cursos);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'id_docente' => 'required|exists:docentes,id',
            'imagen' => 'nullable|string|max:255',
            'descripcion_corta' => 'nullable|string',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date',
            'carga_horario' => 'nullable|integer',
            'inversion' => 'nullable|numeric',
            'modalidad' => 'nullable|in:presencial,virtual,mixta',
            'horarios' => 'nullable|string|max:255',
            'fecha_limite' => 'nullable|date',
            'correo' => 'nullable|string|email|max:255',
            'celular' => 'nullable|string|max:15',
            'descripcion_larga' => 'nullable|string',
            'requisitos' => 'nullable|string',
        ]);

        $curso = Curso::create($validated);
        return response()->json($curso, 201);
    }

    public function show(Curso $curso)
    {
        return response()->json($curso);
    }

    public function update(Request $request, Curso $curso)
    {
        $validated = $request->validate([
            'titulo' => 'nullable|string|max:255',
            'id_docente' => 'nullable|exists:docentes,id',
            'imagen' => 'nullable|string|max:255',
            'descripcion_corta' => 'nullable|string',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date',
            'carga_horario' => 'nullable|integer',
            'inversion' => 'nullable|numeric',
            'modalidad' => 'nullable|in:presencial,virtual,mixta',
            'horarios' => 'nullable|string|max:255',
            'fecha_limite' => 'nullable|date',
            'correo' => 'nullable|string|email|max:255',
            'celular' => 'nullable|string|max:15',
            'descripcion_larga' => 'nullable|string',
            'requisitos' => 'nullable|string',
        ]);

        $curso->update($validated);
        return response()->json($curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return response()->json(['message' => 'Curso eliminado correctamente']);
    }
}
