<?php

namespace App\Http\Controllers;

use App\Models\ContactoEvento;
use Illuminate\Http\Request;

class ContactoEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactoEventos=ContactoEvento::all();
        return $contactoEventos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contactoEvento= new ContactoEvento();
        $contactoEvento->nombre= $request->nombre;
        $contactoEvento->descripcion= $request->descripcion;
        $contactoEvento->telefono= $request->telefono;
        $contactoEvento->evento_id= $request->evento_id;
        $contactoEvento->save();
        return $contactoEvento;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactoEvento=ContactoEvento::findOrFail($id);//capturamos el id
        return $contactoEvento;
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
        $contactoEvento= ContactoEvento::findOrFail($id);
        $contactoEvento->nombre= $request->nombre;
        $contactoEvento->descripcion= $request->descripcion;
        $contactoEvento->telefono= $request->telefono;
        $contactoEvento->evento_id= $request->evento_id;
        $contactoEvento->save();
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
        ContactoEvento::destroy($id);
        return \response("el ContactoEvento con id = ${id} ha sido eliminada");
    }
}
