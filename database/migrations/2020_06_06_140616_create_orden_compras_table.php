<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_compras', function (Blueprint $table) {
            $table->bigIncrements('id');
                $table->unsignedBigInteger('proveedor_id');
                $table->unsignedBigInteger('comida_id');
                $table->integer('precio');
                $table->integer('cantidad');
                $table->integer('total');
    
                $table->timestamps();
    
    
                $table->foreign('proveedor_id')->references('id')->on('proveedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

                $table->foreign('comida_id')->references('id')->on('comidas')
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
        Schema::dropIfExists('orden_compras');
    }
}
