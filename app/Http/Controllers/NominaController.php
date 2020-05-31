<?php

namespace App\Http\Controllers;

use App\Nomina;
use Illuminate\Http\Request;
use Alert;
use DB;

class NominaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      $nomina =  DB::table('nominas')
        ->join('users', function ($join) {
            $join->on('users.id', '=', 'nominas.personal_id');
                
        })
        ->get();

 

$i=1;
return view('nominas.index', compact('nomina', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $nomina = New Nomina;

        $nomina->personal_id           = $request->personal_id;

        $nomina->horas           = $request->horas;
        $nomina->cantidad          = $request->cantidad;

        $nomina->total = $nomina->horas * $nomina->cantidad;

        $nomina->save();

        Alert::success('Operación realizada con éxito','¡Nomina registrada!');

        return redirect()->route('nominas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nomina  $nomina
     * @return \Illuminate\Http\Response
     */
    public function show(Nomina $nomina)
    {
        //
    }

    public function getinfo(Request $request)
    {


        
        
         if($request->ajax()){
            $info= \DB::select('SELECT personals.id, users.name as nombre, users.lastname AS apellido, 
            users.identification as cedula, personals.oficio FROM users, personals WHERE 
            personals.id = ? and users.id = ?', [$request->personal_id, $request->personal_id]);

         }

       
      
            return response()->json($info);

            
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nomina  $nomina
     * @return \Illuminate\Http\Response
     */
    public function edit(Nomina $nomina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nomina  $nomina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nomina $nomina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nomina  $nomina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nomina $nomina)
    {
        //
    }
}
