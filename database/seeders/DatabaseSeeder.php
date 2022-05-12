<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategoriaSeeder::class);     
        $this->call(EventoSeeder::class);  
        $this->call(ContactoEventoSeeder::class);
        $this->call(LocalidadSeeder::class);
        $this->call(EventoLocalidadSeeder::class);
        $this->call(HorarioSeeder::class);
        $this->call(SeccionSeeder::class);
        $this->call(AreaSeeder::class);

        
    }
}
