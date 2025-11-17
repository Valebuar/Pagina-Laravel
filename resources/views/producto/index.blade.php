@extends('layouts.app')

@section('title', 'Gestión de Productos')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Gestión de Productos</h1>

    <a href="{{ route('producto.create') }}" class="btn btn-success mb-3">Agregar nuevo producto</a>

    <!-- Buscador -->
    <form method="GET" class="mb-3">
        <input type="text" name="buscar" class="form-control" placeholder="Buscar por nombre o referencia...">
    </form>

    <!-- Tabla -->
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Referencia</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Categoría</th>
                <th>Estado</th>
                <th style="width: 180px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->referencia }}</td>
                <td>${{ number_format($producto->precio, 2) }}</td>
                <td>{{ $producto->cantidad }}</td>
                <td>{{ $producto->categoría }}</td>
                <td>{{ $producto->estado ? 'Activo' : 'Inactivo' }}</td>
                <td>
                    <a href="{{ route('producto.show', $producto) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('producto.edit', $producto) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('producto.destroy', $producto) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este producto?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="8" class="text-center">No hay productos registrados.</td></tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
