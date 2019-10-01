<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('calle');
            $table->string('colonia');
            $table->string('delegacion');
            $table->Integer('numero')->unsigned();             
            $table->timestamps();               
            //relacion de tablas One to Many 'ubicacions y usuarios' 
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('ubicacions')
            ->onDelete('cascade')
            ->onUpdate('cascade')
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacions');
    }
}
