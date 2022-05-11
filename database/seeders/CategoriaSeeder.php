<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->nombre = "musica";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "cine";
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = "banda";
        $categoria->save();

    }
}
