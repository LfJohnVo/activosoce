<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idTipoEquipo')->nullable();
            $table->integer('idEmpleado')->nullable();
            $table->integer('idMarca')->nullable();
            $table->integer('idModelo')->nullable();
            $table->integer('idRam')->nullable();
            $table->integer('idDiscoDuro')->nullable();
            $table->text('foto')->nullable();
            $table->string('numeroSerie', 45)->nullable();
            $table->decimal('precioCompra', 5, 2)->nullable();
            $table->enum('estatus', ['asignado', 'disponible', 'inservible'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
