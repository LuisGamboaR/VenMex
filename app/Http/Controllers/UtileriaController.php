<?php

namespace App\Http\Controllers;

use App\Utileria;
use Illuminate\Http\Request;

class UtileriaController extends Controller
{
    public function __construct(){
        $this->middleware('can:utilerias.create')->only(['create', 'store']);
        $this->middleware('can:utilerias.index')->only(['index']);
        $this->middleware('can:utilerias.destroy')->only(['destroy']);
        $this->middleware('can:utilerias.edit')->only(['edit', 'update']);
    }

   
    public function index()
    {
        // $utilerias = Utileria::orderBy('id', 'DESC')->paginate();
        // $i=1;

        return view('utilerias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utilerias.create');

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
     * @param  \App\Utileria  $utileria
     * @return \Illuminate\Http\Response
     */
    public function show(Utileria $utileria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Utileria  $utileria
     * @return \Illuminate\Http\Response
     */
    public function edit(Utileria $utileria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utileria  $utileria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utileria $utileria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Utileria  $utileria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utileria $utileria)
    {
        //
    }
}
