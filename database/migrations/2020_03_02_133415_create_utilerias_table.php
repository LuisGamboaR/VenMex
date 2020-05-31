<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtileriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilerias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('cantidad');
            $table->string('descripcion');
            $table->string('cantidad_en_uso')->nullable();
            $table->string('precio');
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
        Schema::dropIfExists('utilerias');
    }
}
