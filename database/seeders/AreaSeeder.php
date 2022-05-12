<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = new Area();
        $area->color = "azul";
        $area->cantidad = 25;
        $area->precio = 90.50;
        $area->referencia = "atras del baño";
        $area->horario_id = 1;
        $area->seccion_id = 1;
        $area->save();

        $area = new Area();
        $area->color = "blanco";
        $area->cantidad = 25;
        $area->precio = 80.00;
        $area->referencia = "delante del baño";
        $area->horario_id = 1;
        $area->seccion_id = 2;
        $area->save();

        $area = new Area();
        $area->color = "amarillo";
        $area->cantidad = 50;
        $area->precio = 50.00;
        $area->referencia = "a lado del baño";
        $area->horario_id = 1;
        $area->seccion_id = 3;
        $area->save();

    }
}
