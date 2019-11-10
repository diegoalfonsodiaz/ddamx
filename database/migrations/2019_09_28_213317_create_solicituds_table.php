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
            $table->string('direccion')->nullable();
            $table->string('direccionobra');
            $table->string('codigoinmueble')->nullable();
            $table->string('expediente')->nullable();
            $table->string('expedienteinterno')->nullable();
            $table->date('fechasolicitud')->default(now());
            $table->string('numerofinca')->nullable();
            $table->string('numerofolio')->nullable();
            $table->string('libro')->nullable();
            $table->string('catastral')->nullable();
            $table->string('solvenciamunicipal')->nullable();
            $table->text('observacion')->nullable();
            $table->string('longitud')->nullable();
            $table->string('ancho')->nullable();
            $table->string('profundidad')->nullable();
            $table->string('diametrotubo')->nullable();
            $table->string('diametrocolector')->nullable();
            $table->unsignedBigInteger('ejecutor_id')->default(1)->nullable();
            $table->unsignedBigInteger('estadofactibilidad_id')->default(1);
            $table->unsignedBigInteger('tipoobra_id')->default(1)->nullable();
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
