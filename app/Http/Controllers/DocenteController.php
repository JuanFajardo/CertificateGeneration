<?php

namespace App\Http\Controllers;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    public function create()
    {
        return view('docentes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'docente' => 'required|string',
        ]);

        Docente::create($request->all());

        return redirect()->route('docentes.index')->with('success', 'Docente creado con éxito.');
    }

    public function show(Docente $docente)
    {
        return view('docentes.show', compact('docente'));
    }

    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'docente' => 'required|string',
        ]);

        $docente->update($request->all());

        return redirect()->route('docentes.index')->with('success', 'Docente actualizado con éxito.');
    }

    public function destroy(Docente $docente)
    {
        $docente->delete();

        return redirect()->route('docentes.index')->with('success', 'Docente eliminado con éxito.');
    }
}
