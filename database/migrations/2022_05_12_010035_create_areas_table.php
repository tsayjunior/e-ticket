<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();

            $table->string('color', 15)->nullable();
            $table->unsignedBigInteger('cantidad');
            $table->decimal('precio', 8, 2);
            $table->string('referencia', 40);

            $table->unsignedBigInteger('horario_id')->nullable();
            $table->unsignedBigInteger('seccion_id')->nullable();
            $table->foreign('horario_id')
                            ->references('id')->on('horarios')
                            ->ondelete('set null');
            $table->foreign('seccion_id')
                            ->references('id')->on('seccions')
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
        Schema::dropIfExists('areas');
    }
}
