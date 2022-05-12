<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();

            $table->datetime('fecha_y_hora', 0);
            $table->unsignedInteger('duracion');

            $table->unsignedBigInteger('evento_localidad_id')->nullable();
            $table->foreign('evento_localidad_id')
                            ->references('id')->on('evento_localidad')
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
        Schema::dropIfExists('horarios');
    }
}
