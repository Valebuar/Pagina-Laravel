@extends('layouts.app')

@section('title', 'Detalles del Producto')

@section('content')
<div class="container mt-4">

    <h1>Detalles del Producto</h1>

    <ul class="list-group mt-3">
        <li class="list-group-item"><strong>Nombre:</strong> {{ $producto->nombre }}</li>
        <li class="list-group-item"><strong>Referencia:</strong> {{ $producto->referencia }}</li>
        <li class="list-group-item"><strong>Descripción:</strong> {{ $producto->descripcion }}</li>
        <li class="list-group-item"><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</li>
        <li class="list-group-item"><strong>Cantidad:</strong> {{ $producto->cantidad }}</li>
        <li class="list-group-item"><strong>Categoría:</strong> {{ $producto->categoría }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ $producto->estado ? 'Activo' : 'Inactivo' }}</li>
    </ul>

    <a href="{{ route('producto.index') }}" class="btn btn-secondary mt-3">Volver</a>

</div>
@endsection
