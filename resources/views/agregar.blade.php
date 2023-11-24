@extends('master')

@section('content')
       <div class="container mt-3">
        <h2>Agregar color</h2>

        <form action="{{ isset($color) ? url('/colors/'.$color->id) : url('/colors') }}" method="POST">
            @csrf
            @if(isset($color))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="nom">Nombre:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ isset($color) ? $color->nom : '' }}" required>
            </div>
            <div class="form-group">
                <label for="codi">Código Hexadecimal:</label>
                <input type="color" class="form-control" id="codi" name="codi" value="{{ isset($color) ? $color->codi : '#000000' }}" required>
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($color) ? 'Guardar Cambios' : 'Agregar' }}</button>
            <a href="{{ url('/colors') }}" class="btn btn-secondary">Volver al Listado</a>
        </form>
    </div>
@endsection