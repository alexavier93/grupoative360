<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ServicoController extends Controller
{

    private $servico;

    public function __construct(Servico $servico)
    {
        $this->servico = $servico;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicos = $this->servico->paginate(10);

        return view('admin.servicos.index', compact('servicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicos.create');
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

        $image = $request->file('image')->store('servicos', 'public');
        $data['image'] = $image;

        // Redimensionando a imagem
        $image = Image::make(public_path("storage/{$image}"))->fit(200, 200);
        $image->save();

        $this->servico->create($data);

        flash('Serviço com sucesso!')->success();
        return redirect()->route('admin.servicos.index');
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
    public function edit($servico)
    {
        $servico = $this->servico->findOrFail($servico);
        return view('admin.servicos.edit', compact('servico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $servico)
    {
        $data = $request->all();
        
        $servico = $this->servico->find($servico);

        if ($request->hasFile('image')) {

            if (Storage::exists($servico->image)) {
                Storage::delete($servico->image);
            }

            $image = $request->file('image')->store('servicos', 'public');
            $data['image'] = $image;

            // Redimensionando a imagem
            $image = Image::make(public_path("storage/{$image}"))->fit(200, 200);
            $image->save();
        }

        $servico->update($data);

        flash('Serviço atualizado com sucesso!')->success();
        return redirect()->route('admin.servicos.index');
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

        $servico = $this->servico->find($id);

        if ($servico->delete() == TRUE) {

            if (Storage::exists($servico->image)) {
                Storage::delete($servico->image);
            }

            flash('Serviço removido com sucesso!')->success();
            return redirect()->route('admin.servicos.index');

        }
        
    }
}
