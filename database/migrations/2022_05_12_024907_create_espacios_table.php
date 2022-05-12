<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspaciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espacios', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('numero');
            $table->string('descripcion', 30);
            $table->unsignedBigInteger('capacidad');

            
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')
                            ->references('id')->on('areas')
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
        Schema::dropIfExists('espacios');
    }
}
