<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadodenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadodenuncias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion',100);
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });

        DB::table('estadodenuncias')->insert(array('id'=>'1','descripcion'=>'Sin procesar','created_at'=>now(),'updated_at'=>now()));
        DB::table('estadodenuncias')->insert(array('id'=>'2','descripcion'=>'En Proceso','created_at'=>now(),'updated_at'=>now()));
        DB::table('estadodenuncias')->insert(array('id'=>'3','descripcion'=>'Finalizado','created_at'=>now(),'updated_at'=>now()));
        DB::table('estadodenuncias')->insert(array('id'=>'4','descripcion'=>'Denegado','created_at'=>now(),'updated_at'=>now()));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadodenuncias');
    }
}
