<?php

namespace Database\Seeders;

use App\Models\ContactoLocalidad;
use Illuminate\Database\Seeder;

class ContactoLocalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactoLocalidad = new ContactoLocalidad();
        $contactoLocalidad->nombre = "juan apaza";
        $contactoLocalidad->descripcion = "local santa cruz sur";
        $contactoLocalidad->telefono = 7799512;
        $contactoLocalidad->localidad_id = 1;
        $contactoLocalidad->save();

        $contactoLocalidad = new ContactoLocalidad();
        $contactoLocalidad->nombre = "mario apaza";
        $contactoLocalidad->descripcion = "local santa cruz norte";
        $contactoLocalidad->telefono = 1378456;
        $contactoLocalidad->localidad_id = 1;
        $contactoLocalidad->save();

        $contactoLocalidad = new ContactoLocalidad();
        $contactoLocalidad->nombre = "marisol gracia";
        $contactoLocalidad->descripcion = "local santa cruz plan 3k";
        $contactoLocalidad->telefono = 9872165;
        $contactoLocalidad->localidad_id = 1;
        $contactoLocalidad->save();
    }
}
