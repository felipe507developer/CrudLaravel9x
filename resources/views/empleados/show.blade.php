@section('title', 'Show Info')

@section('title', 'Inicio')

@extends('layouts.app')

@section('content')
    <div class="container">
        <label for="">
            Name: {{ $empleado->name }}
        </label>
        <br>
        <label for="">
            LastName: {{ $empleado->lastname }}
        </label>
        <br>
        <label for="">
            Age: {{ $empleado->age }}
        </label>
        <br>
        <label for="">
            Photo:
            <label for="">{{ $empleado->photo }}</label>

        </label>
        <img width="100" height="100" src="{{ asset('storage') . '/' . $empleado->photo }}" alt="">
        <br><br>

        <a href="{{ route('empleado.edit', $empleado) }}">Editar información</a>
    </div>
@endsection
