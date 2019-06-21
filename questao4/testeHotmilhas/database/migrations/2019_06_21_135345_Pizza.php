<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pizza extends Migration
{
   	/**
	 * Run the migrations.
	 */
	public function up() {
		Schema::create('pizzas', function (Blueprint $table) {
			$table->increments('id');
			$table->string('sabor');
			$table->string('tamanho');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down() {
		Schema::drop('pizzas');
	}
}
