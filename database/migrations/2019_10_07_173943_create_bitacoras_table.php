<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('licencia_id')->nullable();
            $table->string('descripcion',250)->nullable();
            $table->string('direccion',250)->nullable();
            $table->unsignedBigInteger('asunto_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('licencia_id')->references('id')->on('licencias');
            $table->foreign('asunto_id')->references('id')->on('asuntos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacoras');
    }
}