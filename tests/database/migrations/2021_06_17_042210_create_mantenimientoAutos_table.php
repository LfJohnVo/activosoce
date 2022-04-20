<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientoAutos', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('idAuto')->nullable();
            $table->integer('idTaller')->nullable();
            $table->integer('kilometraje')->nullable();
            $table->date('fechaIngreso')->nullable();
            $table->date('fechaEntrega')->nullable();
            $table->string('motivoIngreso', 2000)->nullable();
            $table->timestamps();
            $table->foreign('idAuto', 'idAuto_fk')->references('id')->on('autos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idTaller', 'idTaller_fk')->references('id')->on('talleres')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantenimientoAutos');
    }
}
