<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $employees = Empleado::all();
       return view('empleados.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->all();
        if($request->hasFile('photo')){
            $datos['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $empleado = Empleado::create($datos);
        return redirect()->route('empleado.show', $empleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $datos = $request->all();
        if($request->hasFile('photo')){

            $temporal_user_url_photo = Empleado::findOrFail($empleado->id, ['photo']);
            if(Storage::delete('public/'.$temporal_user_url_photo->photo)){
                $datos['photo'] = $request->file('photo')->store('uploads', 'public');
            }
        }
        $empleado->update($datos);

        return redirect()->route('empleado.show', $empleado);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        if(Storage::delete('public/'.$empleado->photo)){
            $empleado->delete();
        }

        return redirect()->route('empleado.index');
    }
}
