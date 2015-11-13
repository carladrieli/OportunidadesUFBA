<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOportunidadesCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunidades_candidatos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('usuario_id')->unsigned();
          $table->foreign('usuario_id')->references('id')->on('usuarios');
          $table->integer('oportunidade_id')->unsigned();
          $table->foreign('oportunidade_id')->references('id')->on('oportunidades');
          $table->text('apresentacao');
          $table->string('curriculo', 100);
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
        Schema::drop('oportunidades_candidatos');
    }
}
