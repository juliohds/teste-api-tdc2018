<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ouvintes;

class ouvintesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ouvintes = new Ouvintes;
        $ouvintes->nome = $request->nome;
        $ouvintes->idade = $request->idade;

        $ouvintes->save();
        
        return json_encode($ouvintes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ouvintes = Ouvintes::find($id);
        
        return json_encode($ouvintes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $ouvintes = Ouvintes::find($id);
        $ouvintes->nome = $request->nome;
        $ouvintes->idade = $request->idade;

        $ouvintes->save();
        
        return json_encode($ouvintes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ouvintes = Ouvintes::find($id);
        $ouvintes->delete();
        
        return json_encode("deletado com sucesso!");
    }
}
