<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSituacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situaciones', function (Blueprint $table) {
            $table->id('id_situaciones');
            $table->string('titulo');
            $table->text('descripcion');
            $table->date('fecha_peticion');
            $table->date('fecha_falta');
            $table->char('estado');

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
        Schema::dropIfExists('situaciones');
    }
}
