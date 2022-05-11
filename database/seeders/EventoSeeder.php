<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $evento = new Evento();
        $evento->nombre = "daddy yanke";
        $evento->descripcion = "ultimo tour";
        $evento->estado = "pendiente";
        $evento->categoria_id = 1;
        $evento->save();

        $evento = new Evento();
        $evento->nombre = "bad bunny";
        $evento->descripcion = "penltimo tour";
        $evento->estado = "pendiente";
        $evento->categoria_id = 3;
        $evento->save();

        $evento = new Evento();
        $evento->nombre = "doctor strange";
        $evento->descripcion = "ultimo tour";
        $evento->estado = "pendiente";
        $evento->categoria_id = 2;
        $evento->save();
    }
}
