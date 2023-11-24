<!-- resources/views/colors/index.blade.php -->

@extends('master')

@section('content')
    <div class="container">
        <h1>Listado de Colores</h1>

        <a href="{{ url('/colors/create') }}" class="btn btn-primary">Agregar Color</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Color</th>
                    <th>Nombre</th>
                    <th>Codigo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colors as $color)
                    <tr>
                        <td>{{ $color->id }}</td>
                        <td>
                            <div style="background-color: {{ $color->codi }}; width: 30px; height: 30px; border-radius: 50%;"></div>
                        </td>
                        <td>{{ $color->nom }}</td>
                        <td>{{ $color->codi }}</td>
                        <td>
                        <a href="{{ url('/colors/'.$color->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ url('/colors/'.$color->id.'/edit') }}" class="btn btn-warning">Editar</a>

                            <form action="{{ url('/colors/'.$color->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

 
@endsection