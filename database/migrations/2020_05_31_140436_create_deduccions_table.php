<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deduccions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nomina_id');
            $table->integer('cantidad');
            $table->integer('razon');
            $table->timestamps();

            $table->foreign('nomina_id')->references('id')->on('nominas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deduccions');
    }
}
