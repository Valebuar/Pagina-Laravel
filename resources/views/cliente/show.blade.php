@extends('layouts.app')

@section('title', 'Detalles del Cliente')

@section('content')
<div class="container mt-4">

    <h1>Detalles del Cliente</h1>

    <ul class="list-group mt-3">
        <li class="list-group-item"><strong>Nombre completo:</strong> {{ $cliente->nombre_completo }}</li>
        <li class="list-group-item"><strong>Documento:</strong> {{ $cliente->documento }}</li>
        <li class="list-group-item"><strong>Correo:</strong> {{ $cliente->correo }}</li>
        <li class="list-group-item"><strong>Teléfono:</strong> {{ $cliente->telefono }}</li>
        <li class="list-group-item"><strong>Dirección:</strong> {{ $cliente->direccion }}</li>
        <li class="list-group-item"><strong>Ciudad:</strong> {{ $cliente->ciudad }}</li>
        <li class="list-group-item"><strong>Tipo de cliente:</strong> {{ $cliente->tipo_cliente }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ $cliente->estado ? 'Activo' : 'Inactivo' }}</li>
    </ul>

    <a href="{{ route('cliente.index') }}" class="btn btn-secondary mt-3">Volver</a>

</div>
@endsection
