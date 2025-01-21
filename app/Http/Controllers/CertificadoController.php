<?php

namespace App\Http\Controllers;
use App\Models\Certificado;
use App\Models\Estudiante;
use App\Models\Curso;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function index()
    {
        $certificados = Certificado::with('estudiante', 'curso')->get();
        return view('certificados.index', compact('certificados'));
    }

    public function create()
    {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('certificados.create', compact('estudiantes', 'cursos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'img_base' => 'required|string|max:255',
            'id_estudiante' => 'required|exists:estudiantes,id',
            'id_curso' => 'required|exists:cursos,id',
            'fecha_emision' => 'required|date',
            'codigo' => 'required|string|max:255|unique:certificados,codigo',
        ]);

        Certificado::create($request->all());

        return redirect()->route('certificados.index')->with('success', 'Certificado creado con éxito.');
    }

    public function show(Certificado $certificado)
    {
        return view('certificados.show', compact('certificado'));
    }

    public function edit(Certificado $certificado)
    {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('certificados.edit', compact('certificado', 'estudiantes', 'cursos'));
    }

    public function update(Request $request, Certificado $certificado)
    {
        $request->validate([
            'img_base' => 'required|string|max:255',
            'id_estudiante' => 'required|exists:estudiantes,id',
            'id_curso' => 'required|exists:cursos,id',
            'fecha_emision' => 'required|date',
            'codigo' => 'required|string|max:255|unique:certificados,codigo,' . $certificado->id,
        ]);

        $certificado->update($request->all());

        return redirect()->route('certificados.index')->with('success', 'Certificado actualizado con éxito.');
    }

    public function destroy(Certificado $certificado)
    {
        $certificado->delete();

        return redirect()->route('certificados.index')->with('success', 'Certificado eliminado con éxito.');
    }
}
