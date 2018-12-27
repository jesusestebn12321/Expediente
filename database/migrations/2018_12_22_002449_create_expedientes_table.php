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
            $table->string('type');
            $table->string('imgDemandado');
            $table->integer('demandado_user_id')->unsigned();
            $table->foreign('demandado_user_id')->references('id')
                     ->on('users')
                     ->onDelete('cascade');
            $table->integer('demandante_user_id')->unsigned();
            $table->foreign('demandante_user_id')->references('id')
                     ->on('users')
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
