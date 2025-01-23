@extends('layouts.app')

@section('content')
<div>
    <h1>Editar Curso</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" value="{{ $curso->titulo }}" required>
        <label for="id_docente">ID Docente</label>
        <input type="number" name="id_docente" id="id_docente" value="{{ $curso->id_docente }}" required>
        <button type="submit">Actualizar</button>
    </form>
</div>
@endsection