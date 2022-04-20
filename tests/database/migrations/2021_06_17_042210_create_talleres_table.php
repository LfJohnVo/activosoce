<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalleresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talleres', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nombreTaller', 150)->nullable();
            $table->string('direccion', 1000)->nullable();
            $table->string('telefono', 55)->nullable();
            $table->string('emal', 100)->nullable();
            $table->timestamps();
            $table->enum('estatus', ['activo', 'inactivo'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talleres');
    }
}
