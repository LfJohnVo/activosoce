<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentosAutos', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('idAuto')->nullable();
            $table->text('tarjeton')->nullable();
            $table->text('factura')->nullable();
            $table->text('responsivaEmpleado')->nullable();
            $table->text('ultimaTenencia')->nullable();
            $table->text('ultimaVerificacion')->nullable();
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
        Schema::dropIfExists('documentosAutos');
    }
}
