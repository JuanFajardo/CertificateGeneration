@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Curso</h1>

    <div class="mb-3">
        <strong>Título:</strong>
        <p>{{ $curso->titulo }}</p>
    </div>

    <div class="mb-3">
        <strong>Descripción Corta:</strong>
        <p>{{ $curso->descripcion_corta }}</p>
    </div>

    <div class="mb-3">
        <strong>Fecha de Inicio:</strong>
        <p>{{ $curso->fecha_inicio }}</p>
    </div>

    <div class="mb-3">
        <strong>Fecha de Fin:</strong>
        <p>{{ $curso->fecha_fin }}</p>
    </div>

    <div class="mb-3">
        <strong>Carga Horaria:</strong>
        <p>{{ $curso->carga_horario }} horas</p>
    </div>

    <div class="mb-3">
        <strong>Inversión:</strong>
        <p>Bs {{ number_format($curso->inversion, 2) }}</p>
    </div>

    <div class="mb-3">
        <strong>Modalidad:</strong>
        <p>{{ ucfirst($curso->modalidad) }}</p>
    </div>

    <div class="mb-3">
        <strong>Horarios:</strong>
        <p>{{ $curso->horarios }}</p>
    </div>

    <div class="mb-3">
        <strong>Fecha Límite:</strong>
        <p>{{ $curso->fecha_limite }}</p>
    </div>

    <div class="mb-3">
        <strong>Correo:</strong>
        <p>{{ $curso->correo }}</p>
    </div>

    <div class="mb-3">
        <strong>Celular:</strong>
        <p>{{ $curso->celular }}</p>
    </div>

    <div class="mb-3">
        <strong>Descripción Larga:</strong>
        <div>{!! $curso->descripcion_larga !!}</div>
    </div>

    <div class="mb-3">
        <strong>Requisitos:</strong>
        <div>{!! $curso->requisitos !!}</div>
    </div>

    <div class="mb-3">
        <strong>Docente:</strong>
        <p>{{ $curso->docente->docente }}</p>
    </div>

    @if($curso->imagen)
        <div class="mb-3">
            <strong>Imagen:</strong>
            <img src="{{ asset('storage/' . $curso->imagen) }}" alt="Imagen del curso" class="img-thumbnail mt-2" width="200">
        </div>
    @endif

    <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
