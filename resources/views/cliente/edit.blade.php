@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')
<div class="container mt-4">

    <h1>Editar Cliente</h1>

    <form action="{{ route('cliente.update', $cliente) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')

        @include('cliente.form')

        <button type="submit" class="btn btn-primary">Actualizar cliente</button>
    </form>

</div>
@endsection
