@extends('layouts.app')

@section('title', 'Registrar Cliente')

@section('content')
<div class="container mt-4">

    <h1>Registrar Cliente</h1>

    <form action="{{ route('cliente.store') }}" method="POST" class="mt-3">
        @csrf

        @include('cliente.form')

        <button type="submit" class="btn btn-success">Guardar cliente</button>
    </form>

</div>
@endsection
