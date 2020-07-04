<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComidaProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comida_proveedor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
            $table->integer('total');
            $table->string('observaciones')->nullable();
            $table->unsignedBigInteger('comida_id');
            $table->unsignedBigInteger('proveedor_id');

          

            $table->timestamps();
        });

        Schema::table('comida_proveedor', function($table)
{

    $table->foreign('comida_id')->references('id')->on('comidas')
    ->onDelete('cascade')
    ->onUpdate('cascade');

    $table->foreign('proveedor_id')->references('id')->on('proveedors')
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
        Schema::dropIfExists('comida_proveedor');
    }
}
