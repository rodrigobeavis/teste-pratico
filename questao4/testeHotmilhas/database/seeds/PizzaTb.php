<?php

use Illuminate\Database\Seeder;

class PizzaTb extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Pizza::class, 10 )->create();
    }
}
