<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{

    public function index()
    {
        return view('contatos.contato');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $contato = new Contato;

        $contato->nome =  mb_strtoupper($request->nome, 'UTF-8');

        $contato->email =  mb_strtoupper($request->email, 'UTF-8');

        $contato->mensagem =  mb_strtoupper($request->mensagem, 'UTF-8');

        $contato->save();

        return redirect()->route('contatos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
