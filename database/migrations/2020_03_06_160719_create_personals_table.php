<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->enum('oficio',['COCINERO','DECORADOR','ASEO', 'OBRERO', 'MESONERO']);


             //Relaciones 
             $table->foreign('user_id')->references('id')->on('users')
             ->onDelete('cascade')
             ->onUpdate('cascade');
         
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
        Schema::dropIfExists('personals');
    }
}
