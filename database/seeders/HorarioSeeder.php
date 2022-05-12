<?php

namespace Database\Seeders;

use App\Models\Horario;
use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horario = new Horario();
        $horario->fecha_y_hora = "2021-10-17 21:27:46.018327";
        $horario->duracion = 120;
        $horario->evento_localidad_id = 1;
        $horario->save();

        $horario = new Horario();
        $horario->fecha_y_hora = "2021-10-17 15:30:00.018327";
        $horario->duracion = 120;
        $horario->evento_localidad_id = 1;
        $horario->save();

        $horario = new Horario();
        $horario->fecha_y_hora = "2021-10-20 20:00:00.018327";
        $horario->duracion = 120;
        $horario->evento_localidad_id = 1;
        $horario->save();
    }
}
