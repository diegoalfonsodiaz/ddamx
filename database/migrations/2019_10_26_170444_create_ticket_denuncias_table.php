<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_denuncias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('detalle')->nullable();
            $table->unsignedBigInteger('user')->nullable();
            $table->unsignedBigInteger('denuncia_id');
            $table->date('fecha')->default(now());
            $table->timestamps();
            $table->string('fotografia', 200);

            
            $table->foreign('denuncia_id')->references('id')->on('denuncias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_denuncias');
    }
}
