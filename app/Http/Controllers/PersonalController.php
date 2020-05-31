<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\User;

use Alert;
use DB;

class PersonalController extends Controller
{

    // public function __construct(){
    //     $this->middleware('can:personal.create')->only(['create', 'store']);
    //     $this->middleware('can:personal.index')->only(['index']);
    //     $this->middleware('can:personal.destroy')->only(['destroy']);
    //     $this->middleware('can:personal.edit')->only(['edit', 'update']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


       $personal = \DB::select('SELECT users.id, personals.user_id, personals.id, users.name AS nombre, 
       users.lastname as apellido, users.identification as cedula, users.email as correo, 
       users.telefono as telefono, personals.oficio 

        FROM personals, users WHERE users.id = personals.user_id');

     

   
        $i=1;
        return view('personal.index', compact('personal', 'i'));
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vpersonal = \DB::select('SELECT identification FROM users WHERE identification = ?' , [$request->identification]);
            

        if ($vpersonal) {
            Alert::error('Esta cedula esta afiliada a un personal existente','¡Error en el registro!');
    
            return redirect()->route('personal.create');
            die();
     }
    
     $vpersonal2 = \DB::select('SELECT email FROM users WHERE email = ?' , [$request->email]);
            

     if ($vpersonal2) {
         Alert::error('Este correo esta afiliado a un personal existente','¡Error en el registro!');
 
         return redirect()->route('personal.create');
         die();
  }

  $vpersonal3 = \DB::select('SELECT telefono FROM users WHERE telefono = ?' , [$request->telefono]);
            

  if ($vpersonal3) {
      Alert::error('Este telefono esta afiliado a un personal existente','¡Error en el registro!');

      return redirect()->route('personal.create');
      die();
}



        $personal = User::create(["name" => $request->name,"lastname" => $request->lastname, 
        "email" => $request->email, "telefono" => $request->telefono, "identification" => $request->identification ]);


        $oficio = Personal::create(["oficio" => $request->oficio, "user_id" => $personal->id ]);



        //COMPRUEBO SI HAY DATOS EXISTENTES EN LA DB

        
       
     


        $personal->save();
        $oficio->save();

        Alert::success('Operación realizada con éxito','¡Personal registrado!');

        return redirect()->route('personal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {
        //
    }

    public function pdf()

	{
        $personal = \DB::select('SELECT users.id, personals.user_id, users.name AS nombre, 
        users.lastname as apellido, users.identification as cedula, users.email as correo, 
        users.telefono as telefono, personals.oficio 
 
         FROM personals, users WHERE users.id = personals.user_id');

		 $i = 1;

		 $date = date('d-m-Y');
		$dompdf = PDF::loadView('pdf.personal', compact('personal', 'i','date'));
	 



		return $dompdf->stream('personals.pdf',array('Attachment'=>0));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = User::find($id);

        return view('personal.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

     
        
        $personalUpdate = User::findOrFail($id);
        

        $personalUpdate->name          = $request->name;
        $personalUpdate->lastname          = $request->lastname;
        $personalUpdate->email        = $request->email;

        $personalUpdate->telefono             = $request->telefono;
        $personalUpdate->identification             = $request->identification;

        $personalUpdate->save();


        $personalUpdate2 = Personal::findOrFail($personalUpdate->personal->id);

        $personalUpdate2->oficio             = $request->oficio;
        $personalUpdate2->save();

        Alert::success('Operación realizada con éxito','¡Personal editado!');

        return redirect()->route('personal.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personalDelete = User::findOrFail($id);
        $personalDelete->delete();

        Alert::success('Operación realizada con éxito','¡Personal eliminado!');
        
        return redirect()->route('personal.index');
    }
}
