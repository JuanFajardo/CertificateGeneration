@extends('layouts.app')

@section('content')
<div>
    <h1>Crear Curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" required>
        <label for="id_docente">ID Docente</label>
        <input type="number" name="id_docente" id="id_docente" required>
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection