@extends('layouts.app')

@section('title', 'Registrar Producto')

@section('content')
<div class="container mt-4">

    <h1>Registrar Producto</h1>

    <form action="{{ route('producto.store') }}" method="POST" class="mt-3">
        @csrf

        @include('producto.form')

        <button type="submit" class="btn btn-success">Guardar producto</button>
    </form>

</div>
@endsection
