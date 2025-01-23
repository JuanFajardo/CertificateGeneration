@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Docentes</h1>
    <a href="{{ route('docentes.create') }}" class="btn btn-primary mb-3">Agregar Docente</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($docentes as $docente)
                <tr>
                    <td>{{ $docente->id }}</td>
                    <td>{{ $docente->docente }}</td>
                    <td>
                        <a href="{{ route('docentes.edit', $docente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection