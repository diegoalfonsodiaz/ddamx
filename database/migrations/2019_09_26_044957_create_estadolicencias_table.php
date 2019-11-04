<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadolicenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadolicencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 100);
            $table->string('descripcion', 240)->nullable();
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });
        DB::table('estadolicencias')->insert(array('id'=>'1','nombre'=>'Emisión de orden de pago',
        'descripcion'=>'Debe pagar en banco Banrural','estado'=>'1','created_at'=>now(),'updated_at'=>now()));

        DB::table('estadolicencias')->insert(array('id'=>'2','nombre'=>'Elaboración de licencia de conexión',
        'descripcion'=>'Su licencia esta en proceso','estado'=>'1','created_at'=>now(),'updated_at'=>now()));

        DB::table('estadolicencias')->insert(array('id'=>'3','nombre'=>'Emisión de licencia de conexión',
        'descripcion'=>'Debe pasar a traer su licencia','estado'=>'1','created_at'=>now(),'updated_at'=>now()));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadolicencias');
    }
}
