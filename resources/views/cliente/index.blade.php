@extends('layouts.app')

@section('title', 'Gestión de Clientes')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Gestión de Clientes</h1>

    <a href="{{ route('cliente.create') }}" class="btn btn-success mb-3">Registrar cliente</a>

    <form method="GET" class="mb-3">
        <input type="text" name="buscar" class="form-control" placeholder="Buscar por nombre o documento...">
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Documento</th>
                <th>Correo</th>
                <th>Ciudad</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th style="width: 180px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre_completo }}</td>
                <td>{{ $cliente->documento }}</td>
                <td>{{ $cliente->correo }}</td>
                <td>{{ $cliente->ciudad }}</td>
                <td>{{ $cliente->tipo_cliente }}</td>
                <td>{{ $cliente->estado ? 'Activo' : 'Inactivo' }}</td>
                <td>
                    <a href="{{ route('cliente.show', $cliente) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('cliente.edit', $cliente) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('cliente.destroy', $cliente) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este cliente?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="8" class="text-center">No hay clientes registrados.</td></tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
