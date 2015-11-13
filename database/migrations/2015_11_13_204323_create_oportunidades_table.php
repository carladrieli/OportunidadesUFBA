<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOportunidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunidades', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('usuario_id')->unsigned();
          $table->foreign('usuario_id')->references('id')->on('usuarios');
          $table->string('titulo', 100);
          $table->text('descricao');
          $table->string('cargaHoraria');
          $table->integer('valor');
          $table->date('data_inicio_selecao');
          $table->date('data_fim_selecao');
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
        Schema::drop('oportunidades');
    }
}
