<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedienteDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('imagen_document_id')->unsigned();
            $table->foreign('imagen_document_id')->references('id')
                     ->on('imagen_documents')
                     ->onDelete('cascade');
                     
            $table->integer('expediente_id')->unsigned();
            $table->foreign('expediente_id')->references('id')
                     ->on('expedientes')
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
        Schema::dropIfExists('expediente_documents');
    }
}
