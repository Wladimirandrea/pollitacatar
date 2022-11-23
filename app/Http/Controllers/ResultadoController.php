<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use App\Models\Apuesta;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultados = Resultado::all();
        return view('resultados.index', compact('resultados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resultados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resultados = new Resultado();

        $resultados->resultado1 = $request->resultado1;
        $resultados->resultado2 = $request->resultado2;



        $resultados->save();



        return redirect()->route('resultados.index')

                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function show(Resultado $resultado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultado $resultado)
    {
        return view('resultados.edit',compact('resultado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultado $resultado)
    {


        $resultado->update($request->all());



        return redirect()->route('resultados.index')

                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resultado  $resultado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultado $resultado)
    {
        //
    }
}
