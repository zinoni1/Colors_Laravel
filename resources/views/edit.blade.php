@extends('master')

@section('content')
    <div class="container">
        <h1>Editar Color</h1>
        @if ($color)
    <form action="{{ url('/colors/'.$color->id) }}" method="POST">

            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="colorName" class="form-label">Nombre del Color</label>
                <input type="text" class="form-control" id="colorName" name="nom" value="{{ $color->nom }}" required>
            </div>

            <div class="mb-3">
                <label for="hexColor" class="form-label">Color Hexadecimal</label>
                <input type="color" class="form-control" id="hexColor" name="codi" value="{{ $color->codi }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>

        <a href="{{ url('/colors') }}" class="btn btn-secondary mt-3">Volver al Listado</a>
    </div>
    @else
    <p>Color not found.</p>
@endif
@endsection