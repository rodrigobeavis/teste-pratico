<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Pizza;

class PizzaController extends Controller
{
    public function getPizzas()
    {
        return Pizza::All();
     }

    public function getPizza()
    { }

    public function setPizza()
    { }
}
