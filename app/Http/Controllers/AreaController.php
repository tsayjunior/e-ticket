<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas=Area::all();
        return $areas;
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
            'color'=>'max:30',
            'cantidad'=>'required',
            'precio'=>'required',
            'referencia'=>'required|max:40',
            'horario_id'=>'required',
            'seccion_id'=>'required'
        ]);
        $area= new Area();
        $area->color= $request->color;
        $area->cantidad= $request->cantidad;
        $area->precio= $request->precio;
        $area->referencia= $request->referencia;
        $area->horario_id= $request->horario_id;
        $area->seccion_id= $request->seccion_id;
        $area->save();
        return $area;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area=Area::findOrFail($id);//capturamos el id
        return $area;
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
            'color'=>'max:30',
            'cantidad'=>'required',
            'precio'=>'required',
            'referencia'=>'required|max:40',
            'horario_id'=>'required',
            'seccion_id'=>'required'
        ]);
        $area=Area::findOrFail($id);
        $area->color= $request->color;
        $area->cantidad= $request->cantidad;
        $area->precio= $request->precio;
        $area->referencia= $request->referencia;
        $area->horario_id= $request->horario_id;
        $area->seccion_id= $request->seccion_id;
        $area->save();
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
        Area::destroy($id);
        return \response("el evento con id = ${id} ha sido eliminada");
    }
}
