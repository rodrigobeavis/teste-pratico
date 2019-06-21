<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedido extends Migration
{
   	/**
	 * Run the migrations.
	 */
	public function up() {
		Schema::create('pedidos', function (Blueprint $table) {
			$table->increments('id');

			$table->integer('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id')->on('cliente');
            
            $table->integer('id_pizza')->unsigned();
			$table->foreign('id_pizza')->references('id')->on('pizza');

			$table->string('valor');
			$table->string('obs');

			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down() {
		Schema::drop('pedidos');
	}
}
