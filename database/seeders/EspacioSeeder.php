<?php

namespace Database\Seeders;

use App\Models\Espacio;
use Illuminate\Database\Seeder;

class EspacioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $espacio = new Espacio();
        $espacio->numero = 1;
        $espacio->descripcion = "mesa";
        $espacio->capacidad = 5;
        $espacio->area_id = 1;
        $espacio->save();

        $espacio = new Espacio();
        $espacio->numero = 2;
        $espacio->descripcion = "mesa";
        $espacio->capacidad = 5;
        $espacio->area_id = 1;
        $espacio->save();

        $espacio = new Espacio();
        $espacio->numero = 3;
        $espacio->descripcion = "mesa";
        $espacio->capacidad = 5;
        $espacio->area_id = 1;
        $espacio->save();
    }
}
