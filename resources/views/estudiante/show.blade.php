@extends('layouts.app')

@section('title', 'Detalles del Estudiante')

@section('content')
<div class="container mt-4">

    <h1>Detalles del Estudiante</h1>

    <ul class="list-group mt-3">
        <li class="list-group-item"><strong>Nombres:</strong> {{ $estudiante->nombres }}</li>
        <li class="list-group-item"><strong>Apellidos:</strong> {{ $estudiante->apellidos }}</li>
        <li class="list-group-item"><strong>Documento:</strong> {{ $estudiante->documento }}</li>
        <li class="list-group-item"><strong>Correo:</strong> {{ $estudiante->correo }}</li>
        <li class="list-group-item"><strong>Teléfono:</strong> {{ $estudiante->telefono }}</li>
        <li class="list-group-item"><strong>Programa:</strong> {{ $estudiante->programa }}</li>
        <li class="list-group-item"><strong>Semestre:</strong> {{ $estudiante->semestre }}</li>
        <li class="list-group-item"><strong>Fecha de ingreso:</strong> {{ $estudiante->fecha_ingreso }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ $estudiante->estado ? 'Activo' : 'Inactivo' }}</li>
    </ul>

    <a href="{{ route('estudiante.index') }}" class="btn btn-secondary mt-3">Volver</a>

</div>
@endsection
