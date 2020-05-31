<?php

namespace App\Http\Controllers;

use App\Utileria;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

use Alert;
use DB;

class UtileriaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('can:utilerias.create')->only(['create', 'store']);
    //     $this->middleware('can:utilerias.index')->only(['index']);
    //     $this->middleware('can:utilerias.destroy')->only(['destroy']);
    //     $this->middleware('can:utilerias.edit')->only(['edit', 'update']);
    // }

   
    public function index()
    {
        $utilerias = Utileria::orderBy('id', 'DESC')->paginate();
        $i=1;

        return view('utilerias.index', compact('utilerias', 'i'));
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
        $utileria = new Utileria;

        $utileria->nombre = $request->nombre;
        $utileria->cantidad = $request->cantidad;
        $utileria->cantidad_en_uso = 0;
        $utileria->descripcion = $request->descripcion;
        $utileria->precio = $request->precio;


        $vpersonal = \DB::select('SELECT nombre FROM utilerias WHERE nombre = ?' , [$request->nombre]);
            

        if ($vpersonal) {
            Alert::error('Ya existe una utileria registrada con este nombre','¡Error en el registro!');
    
            return redirect()->route('utilerias.create');
            die();
     }



        $utileria->save();

        Alert::success('Operación realizada con éxito','¡Utileria registrada!');

        return redirect()->route('utilerias.index');
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

    public function pdf()

	{
		$utileria = Utileria::all();

		 $i = 1;

		 $date = date('d-m-Y');
		$dompdf = PDF::loadView('pdf.utileria', compact('utileria', 'i','date'));
	 



		return $dompdf->stream('utilerias.pdf',array('Attachment'=>0));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Utileria  $utileria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Utileria::find($id);

        return view('utilerias.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utileria  $utileria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $utileriaUpdate = Utileria::findOrFail($id);
        $utileriaUpdate->nombre          = $request->nombre;
        $utileriaUpdate->cantidad          = $request->cantidad;
        $utileriaUpdate->descripcion        = $request->descripcion;
        $utileriaUpdate->precio        = $request->precio;


        $utileriaUpdate->save();

        Alert::success('Operación realizada con éxito','¡Utileria editada!');

        return redirect()->route('utilerias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Utileria  $utileria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $utileriaDelete = Utileria::findOrFail($id);
        $utileriaDelete->delete();

        Alert::success('Operación realizada con éxito','¡Utileria eliminada!');
        
        return redirect()->route('utilerias.index');
    }
}
