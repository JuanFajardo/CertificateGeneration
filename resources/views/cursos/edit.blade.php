@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Curso</h1>
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Imagen -->
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" id="imagen" class="form-control">
            @if($curso->imagen)
                <img src="{{ asset('storage/' . $curso->imagen) }}" alt="Imagen del curso" class="img-thumbnail mt-2" width="200">
            @endif
        </div>

        <!-- Titulo -->
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $curso->titulo }}" required>
        </div>

        <!-- Descripción corta -->
        <div class="form-group">
            <label for="descripcion_corta">Descripción Corta</label>
            <textarea name="descripcion_corta" id="descripcion_corta" class="form-control">{{ $curso->descripcion_corta }}</textarea>
        </div>

        <!-- Fecha de inicio -->
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{ $curso->fecha_inicio }}">
        </div>

        <!-- Fecha de fin -->
        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" value="{{ $curso->fecha_fin }}">
        </div>

        <!-- Carga horaria -->
        <div class="form-group">
            <label for="carga_horario">Carga Horaria</label>
            <input type="number" name="carga_horario" id="carga_horario" class="form-control" value="{{ $curso->carga_horario }}">
        </div>

        <!-- Inversión -->
        <div class="form-group">
            <label for="inversion">Inversión</label>
            <input type="number" step="0.01" name="inversion" id="inversion" class="form-control" value="{{ $curso->inversion }}">
        </div>

        <!-- Modalidad -->
        <div class="form-group">
            <label for="modalidad">Modalidad</label>
            <select name="modalidad" id="modalidad" class="form-control">
                <option value="presencial" {{ $curso->modalidad == 'presencial' ? 'selected' : '' }}>Presencial</option>
                <option value="virtual" {{ $curso->modalidad == 'virtual' ? 'selected' : '' }}>Virtual</option>
                <option value="mixta" {{ $curso->modalidad == 'mixta' ? 'selected' : '' }}>Mixta</option>
            </select>
        </div>

        <!-- Horarios -->
        <div class="form-group">
            <label for="horarios">Horarios</label>
            <input type="text" name="horarios" id="horarios" class="form-control" value="{{ $curso->horarios }}">
        </div>

        <!-- Fecha límite -->
        <div class="form-group">
            <label for="fecha_limite">Fecha Límite</label>
            <input type="date" name="fecha_limite" id="fecha_limite" class="form-control" value="{{ $curso->fecha_limite }}">
        </div>

        <!-- Correo -->
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="text" name="correo" id="correo" class="form-control" value="{{ $curso->correo }}">
        </div>

        <!-- Celular -->
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" name="celular" id="celular" class="form-control" value="{{ $curso->celular }}">
        </div>

        <!-- Descripción larga -->
        <div class="form-group">
            <label for="descripcion_larga">Descripción Larga</label>
            <textarea name="descripcion_larga" id="descripcion_larga" class="form-control">{{ $curso->descripcion_larga }}</textarea>
        </div>

        <!-- Requisitos -->
        <div class="form-group">
            <label for="requisitos">Requisitos</label>
            <textarea name="requisitos" id="requisitos" class="form-control">{{ $curso->requisitos }}</textarea>
        </div>

        <!-- ID Docente -->
        <div class="form-group">
            <label for="id_docente">Docente</label>
            <select name="id_docente" id="id_docente" class="form-control">
                @foreach($docentes as $docente)
                    <option value="{{ $docente->id }}" {{ $curso->id_docente == $docente->id ? 'selected' : '' }}>{{ $docente->docente }}</option>
                @endforeach
            </select>
        </div>

        <!-- Botón de envío -->
        <button type="submit" class="btn btn-primary">Actualizar Curso</button>
    </form>
</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('descripcion_larga');
    CKEDITOR.replace('requisitos');
</script>
@endsection
