<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactoLocalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto_localidads', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 30);
            $table->string('descripcion', 50);
            $table->unsignedBigInteger('telefono');

            $table->unsignedBigInteger('localidad_id')->nullable();
            $table->foreign('localidad_id')
                            ->references('id')->on('localidads')
                            ->ondelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto_localidads');
    }
}
