@extends('layouts.app')

@section('content')
<div>
    <h1>Lista de Cursos</h1>
    <a href="{{ route('cursos.create') }}" class="btn btn-primary">Crear Curso</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Modalidad</th>
                <th>Inversión</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->titulo }}</td>
                    <td>{{ $curso->modalidad }}</td>
                    <td>{{ $curso->inversion }}</td>
                    <td>
                        <a href="{{ route('cursos.show', $curso) }}">Ver</a>
                        <a href="{{ route('cursos.edit', $curso) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection