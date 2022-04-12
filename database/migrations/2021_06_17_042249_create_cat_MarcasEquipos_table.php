<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatMarcasEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_MarcasEquipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_tipoEquipo')->nullable();
            $table->string('marca', 100)->nullable();
            $table->string('fabricante', 100)->nullable();
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
        Schema::dropIfExists('cat_MarcasEquipos');
    }
}
