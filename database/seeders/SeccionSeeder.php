<?php

namespace Database\Seeders;

use App\Models\Seccion;
use Illuminate\Database\Seeder;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seccion = new Seccion();
        $seccion->nombre = "vip";
        $seccion->save();

        $seccion = new Seccion();
        $seccion->nombre = "premium";
        $seccion->save();

        $seccion = new Seccion();
        $seccion->nombre = "platinum";
        $seccion->save();
    }
}
