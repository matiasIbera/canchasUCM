<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenisReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenisreservas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_horario1')->unsigned();
            $table->integer('id_horario2')->unsigned();
            $table->date('fecha_reserva');

            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_horario1')->references('id')->on('tenishorarios')->onDelete('cascade');
            $table->foreign('id_horario2')->references('id')->on('tenishorarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenisreservas');
    }
}
