@section('title', 'Editar usuario')

@section('title', 'Inicio')

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            Formulario para editar la informacion de un empleado
        </h1>

        <form action="{{ route('empleado.update', $empleado) }}" method="POST" enctype="multipart/form-data">

            @method('PUT')
            @include('empleados.layouts.form', ['modo' => 'Actualizar'])

        </form>

    </div>

@endsection
