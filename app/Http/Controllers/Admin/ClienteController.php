<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ClienteController extends Controller
{

    private $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = $this->cliente->paginate(10);

        return view('admin.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $slug = Str::slug($request->title, '-');
        $data['slug'] = $slug;

        $image = $request->file('image')->store('clientes', 'public');
        $data['image'] = $image;

        // Redimensionando a imagem
        $image = Image::make(public_path("storage/{$image}"));
        $image->save();

        $this->cliente->create($data);

        flash('Cliente com sucesso!')->success();
        return redirect()->route('admin.clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cliente)
    {
        $cliente = $this->cliente->findOrFail($cliente);
        return view('admin.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cliente)
    {
        $data = $request->all();
        
        $cliente = $this->cliente->find($cliente);

        if ($request->hasFile('image')) {

            if (Storage::exists($cliente->image)) {
                Storage::delete($cliente->image);
            }

            $image = $request->file('image')->store('clientes', 'public');
            $data['image'] = $image;

            // Redimensionando a imagem
            $image = Image::make(public_path("storage/{$image}"));
            $image->save();
        }

        $cliente->update($data);

        flash('Cliente atualizado com sucesso!')->success();
        return redirect()->route('admin.clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;

        $cliente = $this->cliente->find($id);

        if ($cliente->delete() == TRUE) {

            if (Storage::exists($cliente->image)) {
                Storage::delete($cliente->image);
            }

            flash('Cliente removido com sucesso!')->success();
            return redirect()->route('admin.clientes.index');

        }
        
    }
}
