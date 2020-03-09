<?php

namespace App\Http\Controllers;

use App\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    public function __construct(){
        $this->middleware('can:comidas.create')->only(['create', 'store']);
        $this->middleware('can:comidas.index')->only(['index']);
        $this->middleware('can:comidas.destroy')->only(['destroy']);
        $this->middleware('can:comidas.edit')->only(['edit', 'update']);
    }

    public function index()
    {
        // $comidas = Comida::orderBy('id', 'DESC')->paginate();
        // $i=1;

        return view('comidas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comidas.create');
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
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function show(Comida $comida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function edit(Comida $comida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comida $comida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comida $comida)
    {
        //
    }
}
