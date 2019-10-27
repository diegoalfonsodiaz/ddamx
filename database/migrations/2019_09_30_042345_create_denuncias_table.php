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
            $table->text('descripcion');
            $table->date('fecha');
            $table->string('foto', 200);
            $table->string('direccion', 200)->nullable();
            $table->string('telefono', 200);
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
