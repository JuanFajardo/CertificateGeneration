<?php

namespace App\Http\Controllers;
use App\Models\Consulta;
use App\Models\Certificado;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index()
    {
        $consultas = Consulta::with('certificado')->get();
        return view('consultas.index', compact('consultas'));
    }

    public function create()
    {
        $certificados = Certificado::all();
        return view('consultas.create', compact('certificados'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_certificado' => 'required|exists:certificados,id',
            'ip_consulta' => 'required|string|max:45',
        ]);

        Consulta::create($request->all());

        return redirect()->route('consultas.index')->with('success', 'Consulta registrada con éxito.');
    }

    public function show(Consulta $consulta)
    {
        return view('consultas.show', compact('consulta'));
    }

    public function edit(Consulta $consulta)
    {
        $certificados = Certificado::all();
        return view('consultas.edit', compact('consulta', 'certificados'));
    }

    public function update(Request $request, Consulta $consulta)
    {
        $request->validate([
            'id_certificado' => 'required|exists:certificados,id',
            'ip_consulta' => 'required|string|max:45',
        ]);

        $consulta->update($request->all());

        return redirect()->route('consultas.index')->with('success', 'Consulta actualizada con éxito.');
    }

    public function destroy(Consulta $consulta)
    {
        $consulta->delete();

        return redirect()->route('consultas.index')->with('success', 'Consulta eliminada con éxito.');
    }
}
