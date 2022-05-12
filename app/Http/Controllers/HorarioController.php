<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios=Horario::all();
        return $horarios;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horario= new Horario();
        $horario->fecha_y_hora= $request->fecha_y_hora;
        $horario->duracion= $request->duracion;
        $horario->evento_localidad_id= $request->evento_localidad_id;
        $horario->save();
        return $horario;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario=Horario::findOrFail($id);//capturamos el id
        return $horario;
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
        $horario= Horario::findOrFail($id);
        $horario->fecha_y_hora= $request->fecha_y_hora;
        $horario->duracion= $request->duracion;
        $horario->evento_localidad_id= $request->evento_localidad_id;
        $horario->save();
        // return $horario;
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
        Horario::destroy($id);
        return \response("el ContactoEvento con id = ${id} ha sido eliminada");
    }
}
