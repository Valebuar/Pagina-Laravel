@extends('layouts.app')

@section('title', 'Registrar Estudiante')

@section('content')
<div class="container mt-4">

    <h1>Registrar Estudiante</h1>

    <form action="{{ route('estudiante.store') }}" method="POST" class="mt-3">
        @csrf

        @include('estudiante.form')

        <button type="submit" class="btn btn-success">Guardar estudiante</button>
    </form>

</div>
@endsection
