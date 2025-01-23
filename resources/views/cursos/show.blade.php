@extends('layouts.app')

@section('content')
<div>
    <h1>Detalles del Curso</h1>
    <p><strong>ID:</strong> {{ $curso->id }}</p>
    <p><strong>Título:</strong> {{ $curso->titulo }}</p>
    <p><strong>Modalidad:</strong> {{ $curso->modalidad }}</p>
    <p><strong>Inversión:</strong> {{ $curso->inversion }}</p>
</div>
@endsection