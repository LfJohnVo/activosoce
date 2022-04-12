<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenencias', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('idTenencias')->nullable();
            $table->integer('anio')->nullable();
            $table->integer('idDocumentoAuto')->nullable();
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
            $table->foreign('idTenencias', 'idDocumentoAuto_fk')->references('id')->on('documentosAutos')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenencias');
    }
}
