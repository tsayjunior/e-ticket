<?php

namespace Database\Seeders;

use App\Models\Localidad;
use Illuminate\Database\Seeder;

class LocalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localidad = new Localidad();
        $localidad->ubicacion = "tahuichi aguilera";
        $localidad->direccion = "calle bolivar nro 10";
        $localidad->nombre = "tahuichi";
        $localidad->capacidad = 100;
        $localidad->save();

        $localidad = new Localidad();
        $localidad->ubicacion = "universidad unifranz";
        $localidad->direccion = "plan 3k";
        $localidad->nombre = "trivias";
        $localidad->capacidad = 50;
        $localidad->save();

        $localidad = new Localidad();
        $localidad->ubicacion = "estadio cotoca";
        $localidad->direccion = "km 6 pollo sakura";
        $localidad->nombre = "canal unitel";
        $localidad->capacidad = 200;
        $localidad->save();
    }
}
