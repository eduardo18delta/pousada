<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\textohome;

class TextoshomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {          
    $textos = textohome::all();    
    return view('painel.textoshome.index', compact('textos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        $textos = textohome::findOrFail($id);
        return view('painel.textoshome.edit',compact('textos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $attributes = [
          'titulo' => 'Título',
          'descricao' => 'Descrição',
        ];

        $this->validate($request, [
            'titulo' => 'required|min:4|max:64',
            'descricao' => 'required|min:10',
        ] , [] , $attributes);
        
        $textos = textohome::find($id);
        $textos->titulo = $request->titulo;
        $textos->descricao = $request->descricao;
        $textos->save();
        if ($textos)
            return redirect()
                        ->back()
                        ->with('success' , 'Sucesso ao atualizar!');  
            return redirect()
                        ->back()
                        ->with('success' , 'Falha ao atualizar perfil!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function attributes()
{
    return [
        'titulo' => 'email address',
    ];
}
}
