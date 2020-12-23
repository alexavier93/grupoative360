<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{

    private $servico;

    public function __construct(Servico $servico)
    {
        $this->servico = $servico;
    }

    public function index()
    {   
        $servicos = $this->servico->all();

        return view('servicos.index', compact('servicos'));
    }

    public function info($slug)
    {
        $servicos = $this->servico->all();

        $servico = $this->servico::where('slug', $slug)->first();

        return view('servicos.info', compact('servico', 'servicos'));
    }
    
}
