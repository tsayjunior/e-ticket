<?php

namespace App\Http\Controllers;

use App\Models\ContactoLocalidad;
use Illuminate\Http\Request;

class ContactoLocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactolocalidads=ContactoLocalidad::all();
        return $contactolocalidads;
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
            'nombre'=>'required|max:30',
            'descripcion'=>'required|max:50',
            'telefono'=>'required',
            'localidad_id'=>'required'
        ]);
        $contactolocalidads= new ContactoLocalidad();
        $contactolocalidads->nombre= $request->nombre;
        $contactolocalidads->descripcion= $request->descripcion;
        $contactolocalidads->telefono= $request->telefono;
        $contactolocalidads->localidad_id= $request->localidad_id;
        $contactolocalidads->save();
        return $contactolocalidads;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactolocalidads=ContactoLocalidad::findOrFail($id);//capturamos el id
        return $contactolocalidads;
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
            'nombre'=>'required|max:30',
            'descripcion'=>'required|max:50',
            'telefono'=>'required',
            'localidad_id'=>'required'
        ]);
        $contactolocalidads= ContactoLocalidad::findOrFail($id);
        $contactolocalidads->nombre= $request->nombre;
        $contactolocalidads->descripcion= $request->descripcion;
        $contactolocalidads->telefono= $request->telefono;
        $contactolocalidads->localidad_id= $request->localidad_id;
        $contactolocalidads->save();
        // return $contactoEvento;
        return \response("el ContactoEvento con id = ${id} ha sido actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ContactoLocalidad::destroy($id);
        return \response("el ContactoEvento con id = ${id} ha sido eliminada");
    }
}
