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
            $table->bigIncrements('id');
            $table->string('tipoDiscoDuro', 45)->nullable();
            $table->string('capacidad', 45)->nullable();
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
        Schema::dropIfExists('cat_DiscoDuro');
    }
}
