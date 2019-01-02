<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            
            $table->string('imgDemandado');
            
            $table->integer('imagen_partida_id')->unsigned();
            $table->foreign('imagen_partida_id')->references('id')
                     ->on('imagen_partidas')
                     ->onDelete('cascade');
            
            $table->integer('imagen_dni_demandante_id')->unsigned();
            $table->foreign('imagen_dni_demandante_id')->references('id')
                     ->on('imagen_dnis')
                     ->onDelete('cascade');
            
            $table->integer('imagen_dni_demandado_id')->unsigned();
            $table->foreign('imagen_dni_demandado_id')->references('id')
                     ->on('imagen_dnis')
                     ->onDelete('cascade');
            
            $table->integer('demandado_user_id')->unsigned();
            $table->foreign('demandado_user_id')->references('id')
                     ->on('users')
                     ->onDelete('cascade');

            $table->integer('demandante_user_id')->unsigned();
            $table->foreign('demandante_user_id')->references('id')
                     ->on('users')
                     ->onDelete('cascade');

            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')
                    ->on('types')
                    ->onDelete('cascade');
                    
            $table->integer('reason_id')->unsigned();
            $table->foreign('reason_id')->references('id')
                    ->on('reasons')
                    ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedientes');
    }
}
