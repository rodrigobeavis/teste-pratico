<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get("/ok", function(){
    return ['status' => true];
});

Route::get("/cliente/{tetefone}", "ClienteController@getCliente");
Route::get("/clientes", "ClienteController@getClientes");

Route::get("/pizzas", "PizzaController@getPizzas");
Route::post("/pizza/create", "PizzaController@setPizza");

Route::get("/pedidos", "PedidoController@getPedido");
Route::post("/pedido/create", "PedidoController@setPedido");



