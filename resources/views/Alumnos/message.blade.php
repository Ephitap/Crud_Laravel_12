@extends('layout/template')

@section('title', 'Registrar Alumnos | Escuela')

@section('contenido')
<main>
    <div class="container py-4">
        <h2 class="mb-4 text-center">{{ $msg }}</h2>

        <a href="{{ url('alumnos') }}" class="btn btn-secondary">Regresar</a>
    </div>
</main>