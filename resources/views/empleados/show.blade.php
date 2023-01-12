@section('title', 'Show Info')

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow" style="width: 18rem;">
            <img width="100" height="150" src="{{ asset('storage') . '/' . $empleado->photo }}" class="card-img-top" alt="...">
            <div class="card-body">

              <p class="card-title"><strong>Name: </strong>{{ $empleado->name }} </p>
              <p><strong>LastName: </strong> {{ $empleado->lastname }}</p>
              <p class="card-text"><strong>Age:</strong> {{ $empleado->age }}</p>
              <a class="btn btn-primary" href="{{ route('empleado.edit', $empleado) }}">Editar información</a>

            </div>
          </div>

    </div>
@endsection
