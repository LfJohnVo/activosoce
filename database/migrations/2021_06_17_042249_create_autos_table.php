<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idTipo')->nullable();
            $table->integer('idMarca')->nullable();
            $table->integer('idmodelo')->nullable();
            $table->integer('idEmpleado')->nullable();
            $table->text('foto')->nullable();
            $table->string('color', 45)->nullable();
            $table->string('placas', 45)->nullable();
            $table->integer('anio')->nullable();
            $table->decimal('precio_Compra', 10, 2)->nullable();
            $table->integer('kmInicial')->nullable();
            $table->integer('kmFinal')->nullable();
            $table->enum('estatus', ['asignado', 'baja', 'mantenimiento'])->nullable();
            $table->timestamps();
            $table->softDeletes();

            /*$table->foreign('idEmpleado', 'idEmpleadoAuto_fk')->references('id')->on('empleados')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idTipo', 'id_tipo_fk')->references('id')->on('cat_tiposEquipos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idMarca', 'idmarcaAuto_fk')->references('id')->on('cat_MarcasEquipos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idmodelo', 'idmodeloAuto_fk')->references('id')->on('cat_ModelosEquipos')->onDelete('restrict')->onUpdate('restrict');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
}
