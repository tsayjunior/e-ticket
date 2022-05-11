<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoLocalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_localidad', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('localidad_id');
            $table->unsignedBigInteger('evento_id');

            $table->foreign('localidad_id')
                            ->references('id')->on('localidads')->ondelete('cascade');
            $table->foreign('evento_id')
                            ->references('id')->on('eventos')->ondelete('cascade');

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
        Schema::dropIfExists('evento_localidad');
    }
}
