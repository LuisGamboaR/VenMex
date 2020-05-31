<?php

namespace App\Http\Controllers;

use App\Comida;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use DB;
use Alert;

class ComidaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('can:comidas.create')->only(['create', 'store']);
    //     $this->middleware('can:comidas.index')->only(['index']);
    //     $this->middleware('can:comidas.destroy')->only(['destroy']);
    //     $this->middleware('can:comidas.edit')->only(['edit', 'update']);
    // }

    public function index()
    {
        $comidas = Comida::orderBy('id', 'DESC')->paginate();
        $i=1;

        return view('comidas.index', compact('comidas', 'i'));
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
        $comida = new Comida;

        $comida->nombre = $request->nombre;
        $comida->medida = $request->medida;
        $comida->precio = $request->precio;
        $comida->cantidad = $request->cantidad;
        $comida->stock_min = $request->stock_min;
        $comida->stock_max = $request->stock_max;


 
        $vpersonal = \DB::select('SELECT nombre FROM comidas WHERE nombre = ?' , [$request->nombre]);
            

        if ($vpersonal) {
            Alert::error('Ya existen un alimento registrado con este nombre','¡Error en el registro!');
    
            return redirect()->route('personal.create');
            die();
     }


        $comida->save();

        Alert::success('Operación realizada con éxito','¡Alimento registrado!');

        return redirect()->route('comidas.index');
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

    public function pdf()

	{
		$comida = Comida::all();

		 $i = 1;

		 $date = date('d-m-Y');
		$dompdf = PDF::loadView('pdf.alimentos', compact('comida', 'i','date'));
	 



		return $dompdf->stream('alimentos.pdf',array('Attachment'=>0));
	}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Comida::find($id);

        return view('comidas.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comidaUpdate = Comida::findOrFail($id);
        $comidaUpdate->nombre          = $request->nombre;
        $comidaUpdate->cantidad          = $request->cantidad;
        $comidaUpdate->medida        = $request->medida;
        $comidaUpdate->precio        = $request->precio;
        $comidaUpdate->stock_min             = $request->stock_min;
        $comidaUpdate->stock_max             = $request->stock_max;

        $comidalUpdate->save();

        Alert::success('Operación realizada con éxito','¡Alimento editado!');

        return redirect()->route('comidas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comidaDelete = Comida::findOrFail($id);
        $comidaDelete->delete();

        Alert::success('Operación realizada con éxito','¡Alimento eliminado!');
        
        return redirect()->route('comidas.index');
    }
}
