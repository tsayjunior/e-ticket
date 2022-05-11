<?php

namespace Database\Seeders;

use App\Models\EventoLocalidad;
use Illuminate\Database\Seeder;

class EventoLocalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventoLocalidad = new EventoLocalidad();
        $eventoLocalidad->localidad_id = 1;
        $eventoLocalidad->evento_id = 1;
        $eventoLocalidad->save();

        $eventoLocalidad = new EventoLocalidad();
        $eventoLocalidad->localidad_id = 1;
        $eventoLocalidad->evento_id = 2;
        $eventoLocalidad->save();

        $eventoLocalidad = new EventoLocalidad();
        $eventoLocalidad->localidad_id = 2;
        $eventoLocalidad->evento_id = 2;
        $eventoLocalidad->save();
    }
}
