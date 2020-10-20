<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
   
    Schema::create('productos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombre_del_producto',50);
        $table->string('comentario',250);
        $table->unsignedBigInteger('persona')->unsigned();
        $table->foreign('persona')->references('id')->on('personas')->onDelete('cascade');
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
    Schema::dropIfExists('productos');

}
}
