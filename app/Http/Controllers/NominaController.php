<?php

namespace App\Http\Controllers;

use App\Nomina;
use App\Deduccion;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
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
        
     
        $nomina = DB::table('nominas')
        ->join('users', 'users.id', '=', 'nominas.personal_id')
        ->join('personals', 'personals.id', '=', 'users.id')
        ->select('users.*', 'nominas.total','nominas.cantidad','nominas.horas', 'personals.oficio', 'nominas.id')
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



        
// $cantidadDeducciones = count($request->razon);
// for($i=0; $i<$cantidadDeducciones; $i++){
//     $nominas = new Deduccion;


//     $nominas->razon = $request->razon[$i];
//     $nominas->nomina_id = $nomina->id;
//     $nominas->cantidad2 = $request->cantidad2[$i];
//     $nominas->save();
         
            
// }


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

    public function pdf($id)

	{
       

    
    
        $info = DB::table('nominas')
        ->join('users', 'users.id', '=', 'nominas.personal_id')
        ->join('personals', 'personals.id', '=', 'users.id')
        ->select('users.*', 'nominas.total','nominas.cantidad','nominas.horas', 'personals.oficio')
        ->where('nominas.id', '=', $id)
        ->get();

       

		 $i = 1;

		 $date = date('d-m-Y');
		$dompdf = PDF::loadView('pdf.nominas', compact('info', 'i','date'));
	 



		return $dompdf->stream('nomina.pdf',array('Attachment'=>0));
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
