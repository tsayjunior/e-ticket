<?php

namespace App\Http\Controllers;

use App\Models\EventoLocalidad;
use Illuminate\Http\Request;

class EventoLocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventolocalidads=EventoLocalidad::all();
        return $eventolocalidads;
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
            'localidad_id'=>'required',
            'evento_id'=>'required'
        ]);
        $eventolocalidad= new EventoLocalidad();
        $eventolocalidad->localidad_id= $request->localidad_id;
        $eventolocalidad->evento_id= $request->evento_id;
        $eventolocalidad->save();
        return $eventolocalidad;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventolocalidad=EventoLocalidad::findOrFail($id);//capturamos el id
        return $eventolocalidad;
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
            'localidad_id'=>'required',
            'evento_id'=>'required'
        ]);
        $eventolocalidad=EventoLocalidad::findOrFail($id);
        $eventolocalidad->localidad_id= $request->localidad_id;
        $eventolocalidad->evento_id= $request->evento_id;
        $eventolocalidad->save();
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
        EventoLocalidad::destroy($id);
        return \response("el evento con id = ${id} ha sido eliminada");
    }
}
