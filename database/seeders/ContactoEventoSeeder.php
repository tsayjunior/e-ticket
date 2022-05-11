<?php

namespace Database\Seeders;

use App\Models\ContactoEvento;
use Illuminate\Database\Seeder;

class ContactoEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactoEvento = new ContactoEvento();
        $contactoEvento->nombre = "juan apaza";
        $contactoEvento->descripcion = "encargado central santa cruz";
        $contactoEvento->telefono = 7799512;
        $contactoEvento->evento_id = 1;
        $contactoEvento->save();

        $contactoEvento = new ContactoEvento();
        $contactoEvento->nombre = "marizol garcia";
        $contactoEvento->descripcion = "encargada central vallegrande";
        $contactoEvento->telefono = 8794265;
        $contactoEvento->evento_id = 2;
        $contactoEvento->save();

        $contactoEvento = new ContactoEvento();
        $contactoEvento->nombre = "mateo vergara";
        $contactoEvento->descripcion = "gerente comercial";
        $contactoEvento->telefono = 891320;
        $contactoEvento->evento_id = 3;
        $contactoEvento->save();
    }
}
