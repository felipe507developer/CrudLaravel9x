@extends('empleados.layouts.plantilla')

@section('title', 'Inicio')

@section('content')
    <h1>Esta es la vista de index</h1>
    
    @foreach ($employees as $employee )
        <p>{{$employee->name}}</p>        
    @endforeach
    
@endsection
