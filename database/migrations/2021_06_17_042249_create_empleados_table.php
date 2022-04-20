<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numeroEmpleado')->nullable();
            $table->string('nombres', 100)->nullable();
            $table->string('apellidoPaterno', 100)->nullable();
            $table->string('apellidoMaterno', 100)->nullable();
            $table->integer('idProyecto')->nullable();
            $table->string('email', 150)->nullable();
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
        Schema::dropIfExists('empleados');
    }
}
