<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    private $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index()
    {
        $clientes = $this->cliente->all();

        return view('clientes.index', compact('clientes'));
    }
}
