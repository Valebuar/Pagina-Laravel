@extends('layouts.app')

@section('title', 'Registrar Empleado')

@section('content')
<div class="container mt-4">

    <h1>Registrar Empleado</h1>

    <form action="{{ route('empleado.store') }}" method="POST" class="mt-3">
        @csrf

        @include('empleado.form')

        <button type="submit" class="btn btn-success">Guardar empleado</button>
    </form>

</div>
@endsection
