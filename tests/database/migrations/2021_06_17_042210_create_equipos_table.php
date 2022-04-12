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
            $table->integer('id')->primary();
            $table->integer('idTipoEquipo')->nullable();
            $table->integer('idEmpleado')->nullable();
            $table->integer('idMarca')->nullable();
            $table->integer('idModelo')->nullable();
            $table->integer('idRam')->nullable();
            $table->integer('idDiscoDuro')->nullable();
            $table->text('foto')->nullable();
            $table->string('numeroSerie', 45)->nullable();
            $table->decimal('precioCompra', 5, 2)->nullable();
            $table->timestamps();
            $table->enum('estatus', ['asignado', 'disponible', 'inservible'])->nullable();
            $table->foreign('idDiscoDuro', 'idDiscoDuro_fk')->references('id')->on('cat_DiscoDuro')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idMarca', 'idMarca_fk')->references('id')->on('cat_MarcasEquipos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idRam', 'idRam_fk')->references('id')->on('cat_Ram')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idTipoEquipo', 'idTipoEquipo_fk')->references('id')->on('cat_tiposEquipos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idModelo', 'idmodelo_fk')->references('id')->on('cat_ModelosEquipos')->onDelete('restrict')->onUpdate('restrict');
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
