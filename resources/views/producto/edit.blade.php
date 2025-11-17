@extends('layouts.app')

@section('title', 'Editar Producto')

@section('content')
<div class="container mt-4">

    <h1>Editar Producto</h1>

    <form action="{{ route('producto.update', $producto) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')

        @include('producto.form')

        <button type="submit" class="btn btn-primary">Actualizar producto</button>
    </form>

</div>
@endsection
