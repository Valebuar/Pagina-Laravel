@extends('layouts.app')

@section('title', 'Gestión de Empleados')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Gestión de Empleados</h1>

    <a href="{{ route('empleado.create') }}" class="btn btn-success mb-3">Agregar empleado</a>

    <form method="GET" class="mb-3">
        <input type="text" name="buscar" class="form-control" placeholder="Buscar por nombre o documento...">
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Documento</th>
                <th>Cargo</th>
                <th>Salario</th>
                <th>Tipo de contrato</th>
                <th>Estado</th>
                <th style="width: 180px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->nombres }} {{ $empleado->apellidos }}</td>
                <td>{{ $empleado->documento }}</td>
                <td>{{ $empleado->cargo }}</td>
                <td>${{ number_format($empleado->salario, 0) }}</td>
                <td>{{ $empleado->tipo_contrato }}</td>
                <td>{{ $empleado->estado ? 'Activo' : 'Inactivo' }}</td>
                <td>
                    <a href="{{ route('empleado.show', $empleado) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('empleado.edit', $empleado) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('empleado.destroy', $empleado) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este empleado?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="8" class="text-center">No hay empleados registrados.</td></tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
