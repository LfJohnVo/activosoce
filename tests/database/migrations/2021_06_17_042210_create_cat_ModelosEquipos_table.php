<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatModelosEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_ModelosEquipos', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('id_marca')->nullable();
            $table->string('modelo')->nullable();
            $table->integer('anio')->nullable();
            $table->timestamps();
            $table->foreign('id_marca', 'id_marca')->references('id')->on('cat_MarcasEquipos')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_ModelosEquipos');
    }
}
