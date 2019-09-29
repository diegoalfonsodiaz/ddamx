<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('persona_id');
            $table->string('direccionobra');
            $table->string('codigoinmueble');
            $table->string('expediente');
            $table->string('expedienteinterno');
            $table->date('fechasolicitud');
            $table->string('numerofinca');
            $table->string('numerofolio');
            $table->string('libro');
            $table->string('catastral');
            $table->string('solvenciamunicipal');
            $table->string('observacion');
            $table->string('longitud');
            $table->string('ancho');
            $table->string('profundidad');
            $table->string('diametrotubo');
            $table->string('diametrocolector');
            $table->unsignedBigInteger('ejecutor_id');
            $table->unsignedBigInteger('estadofactibilidad_id');
            $table->unsignedBigInteger('tipoobra_id');
            $table->timestamps();
            $table->foreign('ejecutor_id')->references('id')->on('ejecutors');
            $table->foreign('estadofactibilidad_id')->references('id')->on('estadofactibilidads');
            $table->foreign('tipoobra_id')->references('id')->on('tipoobras');
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicituds');
    }
}
