@section('title', 'Create Employee')


@section('title', 'Inicio')

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Formulario para crear nuevo personal</h1>
        <form action="{{ route('empleado.store') }}" method="post" enctype="multipart/form-data">
            @include('empleados.layouts.form', ['modo' => 'Crear'])
        </form>
    </div>
@endsection
