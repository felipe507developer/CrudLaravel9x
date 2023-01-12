{{-- @extends('empleados.layouts.plantilla') --}}

@section('title', 'Inicio')

@extends('layouts.app')

@section('content')
    <div class="container">


        <h1>
            Listar los datos
        </h1>

        <style>
            table,
            tr,
            td {
                border: 1px solid rgb(153, 151, 151);
            }
        </style>

        <a class="btn btn-success mb-2" href="{{route('empleado.create')}}">Crear nuevo registro</a>

        <table class="table">
            <thead>
                <tr>
                    <th>PHOTO</th>
                    <th>#ID</th>
                    <th>NAME</th>
                    <th>LASTNAME</th>
                    <th>OPTION</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($employees as $empleado)
                    <tr>
                        <td>
                            <a href="{{ route('empleado.show', $empleado) }}">
                                <img class="img-thumbnail img-fluid" width="80" height="80" src="{{ asset('storage') . '/' . $empleado->photo }}"
                                    alt="">
                            </a>
                        </td>
                        <td><a href="{{ route('empleado.show', $empleado) }}"><strong>{{ $empleado->name }}</strong></a></td>
                        <td><a href="{{ route('empleado.show', $empleado) }}"><strong>{{ $empleado->lastname }}</strong></a>
                        </td>
                        <td><a href="{{ route('empleado.show', $empleado) }}">{{ $empleado->age }}</a></td>
                        <td><a href="{{ route('empleado.show', $empleado) }}">{{ $empleado->photo }}</a></td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('empleado.edit', $empleado) }}">Editar</a>|
                            <form class="d-inline" action="{{ route('empleado.destroy', $empleado) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Eliminar" />
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

@endsection
