<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadofactibilidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadofactibilidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 100);
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });

        DB::table('estadofactibilidads')->insert(array('id'=>'1','nombre'=>'Sin procesar','created_at'=>now(),'updated_at'=>now()));
       DB::table('estadofactibilidads')->insert(array('id'=>'2','nombre'=>'Factible','created_at'=>now(),'updated_at'=>now()));
       DB::table('estadofactibilidads')->insert(array('id'=>'3','nombre'=>'No Factible','created_at'=>now(),'updated_at'=>now()));
       DB::table('estadofactibilidads')->insert(array('id'=>'3','nombre'=>'En proceso','created_at'=>now(),'updated_at'=>now()));

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadofactibilidads');
    }
}
