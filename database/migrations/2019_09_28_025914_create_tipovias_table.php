<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoviasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipovias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 100);
            $table->string('descripcion', 240)->nullable();
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });
        DB::table('tipovias')->insert(array('id'=>'1','nombre'=>'Tierra','descripcion'=>'Autorizada','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('tipovias')->insert(array('id'=>'2','nombre'=>'Empedrado','descripcion'=>'Autorizada','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('tipovias')->insert(array('id'=>'3','nombre'=>'Adoquin','descripcion'=>'Autorizada','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('tipovias')->insert(array('id'=>'4','nombre'=>'Asfalto','descripcion'=>'Autorizada','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('tipovias')->insert(array('id'=>'5','nombre'=>'Pavimento','descripcion'=>'Autorizada','estado'=>'1','created_at'=>now(),'updated_at'=>now()));



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipovias');
    }
}
