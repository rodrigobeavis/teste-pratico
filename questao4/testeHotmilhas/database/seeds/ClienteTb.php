<?php

use Illuminate\Database\Seeder;

class ClienteTb extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Cliente::class, 10 )->create();
    }
}
