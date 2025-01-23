@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Docente</h1>
    <form action="{{ route('docentes.update', $docente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="docente">Nombre del Docente</label>
            <input type="text" name="docente" id="docente" class="form-control" value="{{ $docente->docente }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection