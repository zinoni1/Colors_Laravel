@extends('master')

@section('content')
    <div class="container">
        <h1>Detalles del Color</h1>
        @if ($color)
        <div style="background-color: {{ $color->codi }}; width: 100%; height: 30px; border-radius: 10px;"></div>
        <div class="mb-3">
            <label for="colorName" class="form-label">Nombre del Color</label>
            <input type="text" class="form-control" id="nom" value="{{ $color->nom }}" readonly>
        </div>

        <div class="mb-3">
            <label for="hexColor" class="form-label">Color Hexadecimal</label>
            <input type="text" class="form-control" id="hexColor" value="{{ $color->codi }}" readonly>
        </div>

        <a href="{{ url('/colors') }}" class="btn btn-secondary">Volver al Listado</a>
        <a href="{{ url('/colors/'.$color->id.'/edit') }}" class="btn btn-warning">Editar</a>

        <form action="{{ url('/colors/'.$color->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
        </form>
    </div>
    @else
    <p>Color not found.</p>
@endif
@endsection