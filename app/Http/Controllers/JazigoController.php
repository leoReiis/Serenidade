<?php

namespace App\Http\Controllers;

use App\Models\Jazigo;
use Illuminate\Http\Request;

class JazigoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Jazigo::all();
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
        return Jazigo::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Jazigo::find($id);
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
    public function update(Request $request, Jazigo $jazigo)
    {
        $jazigo->update($request->all());
        return $jazigo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jazigo $jazigo)
    {
        $jazigo->delete();
        return ['msg' => 'O jazigo foi excluido com sucesso!'];
    }
}
