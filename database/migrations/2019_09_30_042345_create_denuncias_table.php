<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion', 245);
            $table->date('fecha');
            $table->string('foto', 200);
            $table->unsignedBigInteger('estadodenuncia_id');
            $table->timestamps();

            $table->foreign('estadodenuncia_id')->references('id')->on('estadodenuncias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncias');
    }
}
