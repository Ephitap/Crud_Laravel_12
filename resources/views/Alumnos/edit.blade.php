@extends('layout/template')

@section('title', 'Editar Alumnos | Escuela')

@section('contenido')
<main>
    <div class="container py-4">
        <h2 class="mb-4 text-center">Editar Alumno</h2>

        {{-- Mensajes de error --}}
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- Formulario de edición --}}
        <form action="{{ url('alumnos/' .$alumno->id ) }}" method="post" class="border p-4 rounded shadow">
            @method("PUT")
            @csrf 

            <div class="mb-3 row">
                <label for="matricula" class="col-sm-2 col-form-label">Matrícula:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="matricula" id="matricula" 
                    value="{{ $alumno->matricula }}" required>      
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre completo:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nombre" id="nombre" 
                    value="{{ $alumno->nombre }}" required>      
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha de nacimiento:</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" name="fecha" id="fecha" 
                    value="{{ $alumno->fecha_nacimiento }}" required>      
                </div>
            </div>

            <div class="mb-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="telefono" id="telefono" 
                    value="{{ $alumno->telefono }}" required>      
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" id="email" 
                    value="{{ $alumno->email }}">      
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nivel" class="col-sm-2 col-form-label">Nivel:</label>
                <div class="col-md-6">
                    <select name="nivel" id="nivel" class="form-select" required>
                        <option value="">Seleccionar nivel</option>
                        @foreach($niveles as $nivel)
                        <option value="{{ $nivel->id }}" @if ($nivel->id == $alumno->nivel_id) selected @endif>
                            {{ $nivel->nombre }}
                        </option>
                        @endforeach
                    </select>    
                </div>
            </div>

            {{-- Botones de acción --}}
            <div class="btn-group gap-2">
                <a href="{{ url('alumnos') }}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>

        </form>
    </div>    
</main>
@endsection
