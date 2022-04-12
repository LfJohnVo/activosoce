<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatDiscoDuroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_DiscoDuro', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('tipoDiscoDuro', 45)->nullable();
            $table->string('capacidad', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_DiscoDuro');
    }
}
