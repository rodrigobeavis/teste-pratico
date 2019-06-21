<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function getClientes()
    { 
        return Cliente::All();
    }

    public function getCliente($telefone)
    {

        return Cliente::where('telefone', trim($telefone))->first();
     }

    public function setCliente()
    { }
}
