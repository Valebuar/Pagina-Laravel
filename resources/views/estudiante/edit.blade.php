@extends('layouts.app')

@section('title', 'Editar Estudiante')

@section('content')
<div class="container mt-4">

    <h1>Editar Estudiante</h1>

    <form action="{{ route('estudiante.update', $estudiante) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')

        @include('estudiantes.form')

        <button type="submit" class="btn btn-primary">Actualizar estudiante</button>
    </form>

</div>
@endsection
