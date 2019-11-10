<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjecutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejecutors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('direccion', 245);
            $table->string('ornato');
            $table->boolean('estado')->default(1);
            $table->unsignedBigInteger('cargoejecutor_id')->nullable();
            $table->timestamps();
            $table->foreign('cargoejecutor_id')->references('id')->on('cargoejecutors');
        });

        DB::table('ejecutors')->insert(array('id'=>'1','nombre'=>'Sin asignar','direccion'=>'Sin asignar ','ornato'=>'Sin asignar','estado'=>'1','cargoejecutor_id'=>'3','created_at'=>now(),'updated_at'=>now()));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejecutors');
    }
}
