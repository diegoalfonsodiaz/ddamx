<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numerolicencia')->nullable();
            $table->date('fechaautorizacion')->nullable();
            $table->string('recibo')->nullable();
            $table->string('monto')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('derecho');
            $table->string('remocion');
            $table->date('fechaconexion')->nullable();
            $table->unsignedBigInteger('estadolicencia_id');
            $table->unsignedBigInteger('solicitudfactibilidad_id')->unique();
            $table->unsignedBigInteger('tipovia_id');
            $table->timestamps();

                        
            $table->foreign('estadolicencia_id')->references('id')->on('estadolicencias');
            $table->foreign('solicitudfactibilidad_id')->references('id')->on('solicituds');
            $table->foreign('tipovia_id')->references('id')->on('tipovias');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licencias');
    }
}
