<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verificaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idDocumentosAutos')->nullable();
            $table->text('verificacion')->nullable();
            $table->string('bimestre', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();


            //foraneas verificacions
            /*$table->foreign('id_marca', 'id_marca')->references('id')->on('cat_MarcasEquipos')->onDelete('restrict')->onUpdate('restrict');
            //foraneas modelos equipos
            $table->foreign('id_marca', 'id_marca')->references('id')->on('cat_MarcasEquipos')->onDelete('restrict')->onUpdate('restrict');
            //foraneas cat_MarcasEquipos
            $table->foreign('id_tipoEquipo', 'id_tipo')->references('id')->on('cat_tiposEquipos')->onDelete('restrict')->onUpdate('restrict');
            //empleados
            $table->foreign('idProyecto', 'idProyecto')->references('id')->on('proyectos')->onDelete('restrict')->onUpdate('restrict');
            //equipos
            $table->foreign('idDiscoDuro', 'idDiscoDuro_fk')->references('id')->on('cat_DiscoDuro')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idMarca', 'idMarca_fk')->references('id')->on('cat_MarcasEquipos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idRam', 'idRam_fk')->references('id')->on('cat_Ram')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idTipoEquipo', 'idTipoEquipo_fk')->references('id')->on('cat_tiposEquipos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idModelo', 'idmodelo_fk')->references('id')->on('cat_ModelosEquipos')->onDelete('restrict')->onUpdate('restrict');
            //mantenimento autos
            $table->foreign('idAuto', 'idAuto_fk')->references('id')->on('autos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idTaller', 'idTaller_fk')->references('id')->on('talleres')->onDelete('restrict')->onUpdate('restrict');
            //tenencias las
            $table->foreign('idTenencias', 'idDocumentoAuto_fk')->references('id')->on('documentosAutos')->onDelete('restrict')->onUpdate('restrict');
            //foraneas verificaciones
            $table->foreign('idDocumentosAutos', 'idVerificaciones_fk')->references('id')->on('verificaciones')->onDelete('restrict')->onUpdate('restrict');
            //foraneas autos
            $table->foreign('idEmpleado', 'idEmpleadoAuto_fk')->references('id')->on('empleados')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idTipo', 'id_tipo_fk')->references('id')->on('cat_tiposEquipos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idMarca', 'idmarcaAuto_fk')->references('id')->on('cat_MarcasEquipos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idmodelo', 'idmodeloAuto_fk')->references('id')->on('cat_ModelosEquipos')->onDelete('restrict')->onUpdate('restrict');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verificaciones');
    }
}
