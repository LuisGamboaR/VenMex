<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('personal_id');
            $table->integer('cantidad');
            $table->integer('total');
            $table->integer('horas');

            $table->timestamps();


            $table->foreign('personal_id')->references('id')->on('personals')
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
        Schema::dropIfExists('nominas');
    }
}
