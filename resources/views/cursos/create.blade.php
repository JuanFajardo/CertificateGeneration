@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Imagen -->
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" id="imagen" class="form-control">
        </div>

        <!-- Titulo -->
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>

        <!-- Descripción corta -->
        <div class="form-group">
            <label for="descripcion_corta">Descripción Corta</label>
            <textarea name="descripcion_corta" id="descripcion_corta" class="form-control"></textarea>
        </div>

        <!-- Fecha de inicio -->
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control">
        </div>

        <!-- Fecha de fin -->
        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control">
        </div>

        <!-- Carga horaria -->
        <div class="form-group">
            <label for="carga_horario">Carga Horaria</label>
            <input type="number" name="carga_horario" id="carga_horario" class="form-control">
        </div>

        <!-- Inversión -->
        <div class="form-group">
            <label for="inversion">Inversión</label>
            <input type="number" step="0.01" name="inversion" id="inversion" class="form-control">
        </div>

        <!-- Modalidad -->
        <div class="form-group">
            <label for="modalidad">Modalidad</label>
            <select name="modalidad" id="modalidad" class="form-control">
                <option value="presencial">Presencial</option>
                <option value="virtual">Virtual</option>
                <option value="mixta">Mixta</option>
            </select>
        </div>

        <!-- Horarios -->
        <div class="form-group">
            <label for="horarios">Horarios</label>
            <input type="text" name="horarios" id="horarios" class="form-control">
        </div>

        <!-- Fecha límite -->
        <div class="form-group">
            <label for="fecha_limite">Fecha Límite</label>
            <input type="date" name="fecha_limite" id="fecha_limite" class="form-control">
        </div>

        <!-- Correo -->
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="text" name="correo" id="correo" class="form-control">
        </div>

        <!-- Celular -->
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" name="celular" id="celular" class="form-control">
        </div>

        <!-- Descripción larga -->
        <div class="form-group">
            <label for="descripcion_larga">Descripción Larga</label>
            <textarea name="descripcion_larga" id="descripcion_larga" class="form-control"></textarea>
        </div>

        <!-- Requisitos -->
        <div class="form-group">
            <label for="requisitos">Requisitos</label>
            <textarea name="requisitos" id="requisitos" class="form-control"></textarea>
        </div>

        <!-- ID Docente -->
        <div class="form-group">
            <label for="id_docente">Docente</label>
            <select name="id_docente" id="id_docente" class="form-control">
                @foreach($docentes as $docente)
                    <option value="{{$docente->id}}">{{$docente->docente}}</option>
                @endforeach
            </select>
            
        </div>

        <!-- Botón de envío -->
        <button type="submit" class="btn btn-primary">Crear Curso</button>
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
