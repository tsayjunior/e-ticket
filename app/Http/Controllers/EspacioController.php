<?php

namespace App\Http\Controllers;

use App\Models\Espacio;
use Illuminate\Http\Request;

class EspacioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espacios=Espacio::all();
        return $espacios;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $espacio= new Espacio();
        $espacio->numero= $request->numero;
        $espacio->descripcion= $request->descripcion;
        $espacio->capacidad= $request->capacidad;
        $espacio->area_id= $request->area_id;
        $espacio->save();
        return $espacio; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $espacio=Espacio::findOrFail($id);//capturamos el id
        return $espacio;
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
        $espacio=Espacio::findOrFail($id);
        $espacio->numero= $request->numero;
        $espacio->descripcion= $request->descripcion;
        $espacio->capacidad= $request->capacidad;
        $espacio->area_id= $request->area_id;
        $espacio->save();
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
        Espacio::destroy($id);
        return \response("el evento con id = ${id} ha sido eliminada");
    }
}
