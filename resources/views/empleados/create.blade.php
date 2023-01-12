@extends('empleados.layouts.plantilla')

@section('title', 'Create Employee')


@section('content')
    <h1>Formulario para crear nuevo personal</h1>
    <form action="{{ route('empleado.store') }}" method="post" enctype="multipart/form-data">
        @include('empleados.layouts.form', ['modo' => 'Crear'])
    </form>
@endsection