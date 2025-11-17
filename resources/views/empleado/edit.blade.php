@extends('layouts.app')

@section('title', 'Editar Empleado')

@section('content')
<div class="container mt-4">

    <h1>Editar Empleado</h1>

    <form action="{{ route('empleado.update', $empleado) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')

        @include('empleado.form')

        <button type="submit" class="btn btn-primary">Actualizar empleado</button>
    </form>

</div>
@endsection
