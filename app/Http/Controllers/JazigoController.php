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
        $regras   = ['id_sepultado' => 'required|unique:jazigo'];
        $feedback = ['required' => 'O campo:attribute é obrigatório.'];
        $request->validate($regras, $feedback);

        // stateless -> cada requisição deve ser única [Header Accept - application/json]

        $jazigo = $this->jazigo->create($request->all());
        return response()->json($jazigo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jazigo = $this->jazigo->find($id);
        if(is_null($jazigo)) {
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404);
        }
        return $jazigo;
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
            return response()->json(['erro' => 'Não foi possível atualizar. O recurso solicitado não existe.'], 404);
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
            return response()->json(['erro' => 'Não foi possível excluir. O recurso solicitado não existe.'], 404);
        }
        $jazigo->delete();

        return response()->json(['resposa' => 'O jazigo foi excluido com sucesso!']);
    }
}
