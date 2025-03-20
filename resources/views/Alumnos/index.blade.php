@extends('layout/template')

@section('title', 'Alumnos | Escuela')

@section('contenido')

<main>
    <div class="container py-4">
        <h2 class="mb-4 text-center">Listado de alumnos</h2>

        <div class="d-flex justify-content-between mb-3">
            <a href="{{ url('alumnos/create')}}" class="btn btn-primary btn-sm">Nuevo registro</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="table-dark text-center">
                    <tr>
                        <th>#</th>
                        <th>Matrícula</th>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Nivel</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos as $alumno)
                        <tr class="align-middle">
                            <td>{{ $alumno->id }}</td>
                            <td>{{ $alumno->matricula }}</td>
                            <td>{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->fecha_nacimiento }}</td>
                            <td>{{ $alumno->telefono }}</td>
                            <td>{{ $alumno->email }}</td>
                            <td>{{ $alumno->nivel->nombre }}</td>
                            <td class="text-center">
                                <a href="{{ url('alumnos/'.$alumno->id.'/edit' ) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ url('alumnos/'.$alumno->id)}}" method="post" class="d-inline">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este alumno?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
