@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Docente</h1>
    <form action="{{ route('docentes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="docente">Nombre del Docente</label>
            <input type="text" name="docente" id="docente" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection