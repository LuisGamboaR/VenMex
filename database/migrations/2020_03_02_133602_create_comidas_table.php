<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('cantidad');
            $table->enum('medida',['UNITARIO', 'KG']);
            $table->string('precio');
            $table->string('stock_min');
            $table->string('stock_max');

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
        Schema::dropIfExists('comidas');
    }
}
