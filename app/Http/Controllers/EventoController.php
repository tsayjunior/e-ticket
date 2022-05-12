<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos=Evento::all();
        return $eventos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nombre'=>'required|max:40',
            'descripcion'=>'required|max:60',
            'estado'=>'required|max:40',
            'categoria_id'=>'required'
        ]);
        $evento= new Evento();
        $evento->nombre= $request->nombre;
        $evento->descripcion= $request->descripcion;
        $evento->estado= $request->estado;
        $evento->categoria_id= $request->categoria_id;
        $evento->save();
        return $evento;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento=Evento::findOrFail($id);//capturamos el id
        return $evento;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // $evento=Evento::findOrFail($request->id);//capturamos el id
        // $evento->nombre= $request->nombre;
        // $evento->descripcion= $request->descripcion;
        // $evento->estado= $request->estado;
        // $evento->save();
        // return $evento;

        // $evento=Evento::findOrFail($id)->update($request->all());
        $request->validate([
            'nombre'=>'required|max:40',
            'descripcion'=>'required|max:60',
            'estado'=>'required|max:40',
            'categoria_id'=>'required'
        ]);
        $evento=Evento::findOrFail($id);
        $evento->nombre= $request->nombre;
        $evento->descripcion= $request->descripcion;
        $evento->estado= $request->estado;
        $evento->categoria_id= $request->categoria_id;
        $evento->save();
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
        Evento::destroy($id);
        return \response("el evento con id = ${id} ha sido eliminada");
    }
}
