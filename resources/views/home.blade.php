@extends('layouts.app')

@section('content')
    <h1>Bienvenido a nuestra tienda en línea</h1>
    <!-- Contenido de la página de inicio -->
@endsection
@foreach ($productos as $producto)
        <div class="producto">
            <h2>{{ $producto->nombre }}</h2>
            <p>Precio: ${{ $producto->precio }}</p>
            <p>Categoría: {{ $producto->categorias->nombre }}</p>
            <p>Comentarios:</p>
            <ul>
                @foreach ($producto->comentarios as $comentario)
                    <li>{{ $comentario->comentario }}</li>
                @endforeach
            </ul>
        </div>
    @endforeach
