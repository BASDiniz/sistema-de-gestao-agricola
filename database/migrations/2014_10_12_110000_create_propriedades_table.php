<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropriedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propriedades', function (Blueprint $table) {
            $table->id();
            $table->integer('tamanho_total');
            $table->string('fonte_de_agua');
            $table->unsignedBigInteger('id_produtor');
            $table->foreign('id_produtor')->references('id')->on('users');
            $table->unsignedBigInteger('id_endereco');
            $table->foreign('id_endereco')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propriedades');
    }
}
