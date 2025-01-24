<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use App\Models\Docente;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        $docentes = Docente::all();
        return view('cursos.create', compact('docentes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'id_docente' => 'required|integer',
        ]);

        Curso::create($request->all());
        return redirect()->route('cursos.index')->with('success', 'Curso creado exitosamente.');
    }

    public function show(Curso $curso)
    {
        $docente = Docente::find($curso->id_docente);
        return view('cursos.show', compact('curso', 'docente'));
    }

    public function edit(Curso $curso)
    {
        $docentes = Docente::all();
        return view('cursos.edit', compact('curso', 'docentes'));
    }

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'id_docente' => 'required|integer',
        ]);

        $curso->update($request->all());

        return redirect()->route('cursos.index')->with('success', 'Curso actualizado exitosamente.');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index')->with('success', 'Curso eliminado exitosamente.');
    }
}
