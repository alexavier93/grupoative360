<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Servico;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $banners = Banner::all();
        $servicos = Servico::all();
        
        return view('home.index', compact('banners', 'servicos'));

    }
}
