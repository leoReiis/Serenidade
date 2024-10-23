<?php

namespace App\Http\Controllers;

use App\Models\Jazigo;
use Illuminate\Http\Request;

class JazigoController extends Controller
{
    protected $jazigo;

    public function __construct(Jazigo $jazigo)
    {
       $this->jazigo = $jazigo; 
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->jazigo->all();    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->jazigo->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->jazigo->find($id) ?? ['erro' => 'Recurso pesquisado não existe'];
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
        $jazigo = $this->jazigo->find($id); 
        if(is_null($jazigo)) {
            return ['erro' => 'Não foi possível atualizar. O recurso solicitado não existe.'];
        }
        return $jazigo->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jazigo = $this->jazigo->find($id);
        if(is_null($jazigo)) {
            return ['erro' => 'Não foi possível excluir. O recurso solicitado não existe.'];
        }
        $jazigo->delete();

        return ['resposa' => 'O jazigo foi excluido com sucesso!'];
    }
}
