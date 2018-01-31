<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaItensdispensa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensdispensa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->default(null);
            $table->integer('cargahoraria')->default(null);
            $table->string('natureza')->default(null);
            $table->string('atividade')->default(null);
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
        Schema::dropIfExists('itensdispensa');
    }
}
