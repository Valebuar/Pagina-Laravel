@extends('layouts.app')

@section('title', 'Detalles del Empleado')

@section('content')
<div class="container mt-4">

    <h1>Detalles del Empleado</h1>

    <ul class="list-group mt-3">
        <li class="list-group-item"><strong>Nombres:</strong> {{ $empleado->nombres }}</li>
        <li class="list-group-item"><strong>Apellidos:</strong> {{ $empleado->apellidos }}</li>
        <li class="list-group-item"><strong>Documento:</strong> {{ $empleado->documento }}</li>
        <li class="list-group-item"><strong>Correo:</strong> {{ $empleado->correo }}</li>
        <li class="list-group-item"><strong>Teléfono:</strong> {{ $empleado->telefono }}</li>
        <li class="list-group-item"><strong>Cargo:</strong> {{ $empleado->cargo }}</li>
        <li class="list-group-item"><strong>Salario:</strong> ${{ number_format($empleado->salario, 0) }}</li>
        <li class="list-group-item"><strong>Tipo de contrato:</strong> {{ $empleado->tipo_contrato }}</li>
        <li class="list-group-item"><strong>Fecha de contratación:</strong> {{ $empleado->fecha_contratacion }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ $empleado->estado ? 'Activo' : 'Inactivo' }}</li>
    </ul>

    <a href="{{ route('empleado.index') }}" class="btn btn-secondary mt-3">Volver</a>

</div>
@endsection
