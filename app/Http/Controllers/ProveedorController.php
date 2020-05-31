<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\User;
use Alert;
use DB;

class ProveedorController extends Controller
{
    // public function __construct(){
    //     $this->middleware('can:proveedores.create')->only(['create', 'store']);
    //     $this->middleware('can:proveedores.index')->only(['index']);
    //     $this->middleware('can:proveedores.destroy')->only(['destroy']);
    //     $this->middleware('can:proveedores.edit')->only(['edit', 'update']);
    // }

    public function index()
    {
        $proveedor = \DB::select('SELECT users.id, proveedors.user_id, users.name AS nombre, 
          users.email as correo, users.address as direccion, users.telefono as telefono, proveedors.rif
 
         FROM proveedors, users WHERE users.id = proveedors.user_id');

        $i=1;

        return view('proveedores.index', compact('proveedor', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vprovee = \DB::select('SELECT rif FROM proveedors WHERE rif = ?' , [$request->rif]);
            

        if ($vprovee) {
            Alert::error('Este rif esta afiliado a un proveedor existente','¡Error en el registro!');
    
            return redirect()->route('proveedores.create');
            die();
     }
    
     $vprovee2 = \DB::select('SELECT email FROM users WHERE email = ?' , [$request->email]);
            

     if ($vprovee2) {
         Alert::error('Este correo esta afiliado a un proveedor existente','¡Error en el registro!');
 
         return redirect()->route('proveedores.create');
         die();
  }

  $vprovee3 = \DB::select('SELECT telefono FROM users WHERE telefono = ?' , [$request->telefono]);
            

  if ($vprovee3) {
      Alert::error('Este telefono esta afiliado a un proveedor existente','¡Error en el registro!');

      return redirect()->route('proveedores.create');
      die();
}


     
$proveedor = User::create(["name" => $request->name,"address" => $request->address, 
"email" => $request->email, "telefono" => $request->telefono]);


$rif = Proveedor::create(["rif" => $request->rif, "user_id" => $proveedor->id ]);



//COMPRUEBO SI HAY DATOS EXISTENTES EN LA DB






$proveedor->save();
$rif->save();

     


     
        Alert::success('Operación realizada con éxito','¡Proveedor registrado!');

        return redirect()->route('proveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    public function pdf()

	{
        $proveedor = \DB::select('SELECT users.id, proveedors.user_id, users.name AS nombre, 
        users.email as correo, users.address as direccion, users.telefono as telefono, proveedors.rif

       FROM proveedors, users WHERE users.id = proveedors.user_id');

		 $i = 1;

		 $date = date('d-m-Y');
		$dompdf = PDF::loadView('pdf.proveedores', compact('proveedor', 'i','date'));
	 



		return $dompdf->stream('proveedores.pdf',array('Attachment'=>0));
	}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::find($id);
  

        return view('proveedores.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedorUpdate = User::findOrFail($id);


        $proveedorUpdate->name = $request->name;
        $proveedorUpdate->address = $request->address;
        $proveedorUpdate->telefono = $request->telefono;
        $proveedorUpdate->email = $request->email;

        $proveedorUpdate->save();

        $proveedorUpdate2 = Proveedor::findOrFail($proveedorUpdate->proveedor->id);

        $proveedorUpdate2->rif = $request->rif;
        $proveedorUpdate2->save();

        Alert::success('Operación realizada con éxito','¡Proveedor editado!');

        return redirect()->route('proveedores.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedorDelete = User::findOrFail($id);
        $proveedorDelete->delete();

        Alert::success('Operación realizada con éxito','¡Proveedor eliminado!');
        
        return redirect()->route('proveedores.index');
    }
}
