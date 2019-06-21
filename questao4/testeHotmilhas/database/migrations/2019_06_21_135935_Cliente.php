<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration
{
    /**
	 * Run the migrations.
	 */
	public function up() {
		Schema::create('clientes', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->string('telefone');
            $table->string('endereco');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down() {
		Schema::drop('clientes');
	}
}
