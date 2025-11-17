@extends('layouts.app')

@section('title', 'Gestión de Estudiantes')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Gestión de Estudiantes</h1>

    <a href="{{ route('estudiante.create') }}" class="btn btn-success mb-3">Registrar estudiante</a>

    <!-- Buscador -->
    <form method="GET" class="mb-3">
        <input type="text" name="buscar" class="form-control" placeholder="Buscar por nombre o documento...">
    </form>

    <!-- Tabla -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombres y Apellidos</th>
                <th>Documento</th>
                <th>Correo</th>
                <th>Programa</th>
                <th>Semestre</th>
                <th>Estado</th>
                <th style="width: 180px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->id }}</td>
                <td>{{ $estudiante->nombres }} {{ $estudiante->apellidos }}</td>
                <td>{{ $estudiante->documento }}</td>
                <td>{{ $estudiante->correo }}</td>
                <td>{{ $estudiante->programa }}</td>
                <td>{{ $estudiante->semestre }}</td>
                <td>{{ $estudiante->estado ? 'Activo' : 'Inactivo' }}</td>
                <td>
                    <a href="{{ route('estudiante.show', $estudiante) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('estudiante.edit', $estudiante) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('estudiante.destroy', $estudiante) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este estudiante?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="8" class="text-center">No hay estudiantes registrados.</td></tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
