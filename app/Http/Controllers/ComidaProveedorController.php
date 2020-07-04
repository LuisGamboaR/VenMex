<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComidaProveedorController extends Controller
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
            $proveedor = \DB::select('SELECT users.id, proveedors.user_id, users.name AS nombre, 
            users.email as correo, users.address as direccion, users.telefono as telefono, proveedors.rif
   
           FROM proveedors, users WHERE users.id = proveedors.user_id');

            $comida = \DB::select('SELECT * FROM comidas');


        return view('comida-proveedor.create', compact('proveedor', 'comida'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);

        $nomina = New Nomina;

        $nomina->personal_id           = $request->personal_id;

        $nomina->horas           = $request->horas;
        $nomina->cantidad          = $request->cantidad;

        $nomina->total = $nomina->horas * $nomina->cantidad;

        $nomina->save();



        
$cantidadDeducciones = count($request->razon);
for($i=0; $i<$cantidadDeducciones; $i++){
    $nominas = new Deduccion;


    $nominas->razon = $request->razon[$i];
    $nominas->nomina_id = $nomina->id;
    $nominas->cantidad2 = $request->cantidad2[$i];
    $nominas->save();
         
            
}

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
        //
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
}
