<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactoEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto_eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->string('descripcion', 50);
            $table->unsignedBigInteger('telefono');

            $table->unsignedBigInteger('evento_id')->nullable();
            $table->foreign('evento_id')
                            ->references('id')->on('eventos')
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
        Schema::dropIfExists('contacto_eventos');
    }
}
