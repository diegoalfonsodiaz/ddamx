<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoobrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoobras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100);
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });

        //Semillas Tipo de obra
        DB::table('tipoobras')->insert(array('id'=>'1','nombre'=>'Sin asignar','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('tipoobras')->insert(array('id'=>'2','nombre'=>'Unifamiliar','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('tipoobras')->insert(array('id'=>'3','nombre'=>'Bifamiliar','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('tipoobras')->insert(array('id'=>'4','nombre'=>'Multifamiliar','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('tipoobras')->insert(array('id'=>'5','nombre'=>'Comercial','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('tipoobras')->insert(array('id'=>'6','nombre'=>'Industrial','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
        DB::table('tipoobras')->insert(array('id'=>'7','nombre'=>'otros','estado'=>'1','created_at'=>now(),'updated_at'=>now()));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoobras');
    }
}
