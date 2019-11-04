<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoejecutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargoejecutors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->boolean('estado');
            $table->timestamps();
        });

        //Semillas cargo de ejecutor
        DB::table('cargoejecutors')->insert(array('id'=>'1','nombre'=>'Arquitecto','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('cargoejecutors')->insert(array('id'=>'2','nombre'=>'Ingeniero','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('cargoejecutors')->insert(array('id'=>'3','nombre'=>'Constructor','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargoejecutors');
    }
}
