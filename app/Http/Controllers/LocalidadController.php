<?php

namespace App\Http\Controllers;

use App\Models\Localidad;
use Illuminate\Http\Request;

class LocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localidads=Localidad::all();
        return $localidads;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ubicacion'=>'required|max:30',
            'direccion'=>'required|max:30',
            'nombre'=>'required|max:30',
            'capacidad'=>'required'
        ]);
        $localidad= new Localidad();
        $localidad->ubicacion= $request->ubicacion;
        $localidad->direccion= $request->direccion;
        $localidad->nombre= $request->nombre;
        $localidad->capacidad= $request->capacidad;
        $localidad->save();
        return $localidad;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $localidad=Localidad::findOrFail($id);//capturamos el id
        return $localidad;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ubicacion'=>'required|max:30',
            'direccion'=>'required|max:30',
            'nombre'=>'required|max:30',
            'capacidad'=>'required'
        ]);
        $localidad=Localidad::findOrFail($id)->update($request->all());
        // $evento=Evento::findOrFail($id);
        // return $evento;
        return \response("el evento con id = ${id} ha sido actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Localidad::destroy($id);
        return \response("el evento con id = ${id} ha sido eliminada");
    }
}
