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



    $cantidadDeducciones = count($request->razon);
for($i=0; $i<$cantidadDeducciones; $i++){
    $nominas = new Deduccion;


    $nominas->razon = $request->razon[$i];
    $nominas->nomina_id = $nomina->id;
    $nominas->cantidad2 = $request->cantidad2[$i];
    $nominas->save();
         
            
}


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
        ->select('users.*', 'nominas.total','nominas.cantidad','nominas.horas', 'personals.oficio', 'nominas.id', )
        ->where('nominas.id', '=', $id)
        ->get();

        // $info2 = DB::table('nominas')
        // ->join('deduccions', 'nominas.id', '=', 'deduccions.nomina_id')
        // ->select('deduccions.*')
        // ->where('nominas.id', '=', $id)
        // // ->groupBy('nomina_id')
        // ->get();


        // $info = DB::table('nominas')
        // ->join('users', 'users.id', '=', 'nominas.personal_id')
        // ->join('personals', 'personals.id', '=', 'users.id')
        // ->select('users.*', 'nominas.total','nominas.cantidad','nominas.horas', 'personals.oficio')
        // ->where('nominas.id', '=', $id)
        // ->get();

        $info2 = Deduccion::where('nomina_id', $id)->get();

        $restar = DB::table('nominas')
        ->select('nominas.total')
        ->where('nominas.id', '=', $id)
        ->get();


     
       $sumar = collect($info2)->sum('cantidad2');



       
// $res = 0;
      
//        for($i=0; $i<1; $i++){
    
       
       
//          $res = $restar - $sumar;
        
                
                   
//        }
       
//        dd($res);


		 $i = 1;

		 $date = date('d-m-Y');
		$dompdf = PDF::loadView('pdf.nominas', compact('info', 'info2', 'sumar','i','date'));
	 



		return $dompdf->stream('nomina.pdf',array('Attachment'=>0));
    }
    

    public function pdf2()

	{
       
       
      

        $nomina = DB::table('nominas')
        ->join('users', 'users.id', '=', 'nominas.personal_id')
        ->join('personals', 'personals.id', '=', 'users.id')
        ->select('users.*', 'nominas.total','nominas.cantidad','nominas.horas', 'personals.oficio', 'nominas.id')
        ->get();

     

 

$i=1;

	

		 $date = date('d-m-Y');
		$dompdf = PDF::loadView('pdf.nominaslist', compact('nomina', 'i','date'));
	 



		return $dompdf->stream('nomina2.pdf',array('Attachment'=>0));
	}

    public function getinfo(Request $request)
    {


        
        
         if($request->ajax()){
            $info= \DB::select('SELECT personals.id, users.name as nombre, users.lastname AS apellido, 
            users.identification as cedula, users.tipo_c, personals.oficio FROM users, personals WHERE 
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
