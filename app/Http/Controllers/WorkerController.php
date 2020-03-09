<?php

namespace App\Http\Controllers;


use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;




class WorkerController extends Controller
{

    public function __construct(){
        $this->middleware('can:usuarios.create')->only(['create', 'store']);
        $this->middleware('can:usuarios.index')->only(['index']);
        $this->middleware('can:usuarios.destroy')->only(['destroy']);
        $this->middleware('can:usuarios.edit')->only(['edit', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate();
        $i=1;

        return view('users.index', compact('users', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    
        $user = new User;

        $user->email            = $request->email;
        $user->password         = bcrypt($request->password);
        $user->name             = $request->name;
        $user->lastname         = $request->lastname;
        $user->identification   = $request->identification;



        $vusers = \DB::select('SELECT * FROM users WHERE email = ?' , [$request->email]);
            

        if ($vusers) {
            Alert::error('Este correo esta afiliado a un usuario existente','¡Error en el registro!');
    
            return redirect()->route('usuarios.create');
            die();
     }

     $vusers2 = \DB::select('SELECT * FROM users WHERE identification = ?' , [$request->cedula]);
            

     if ($vusers2) {
         Alert::error('Esta cedula esta afiliada a un usuario existente','¡Error en el registro!');
 
         return redirect()->route('usuarios.create');
         die();
  }

  $user->save();


  if ($request->rol = 'ADMIN'){

    $user2 = $user->id;
     User::find($user2); 
        $user->assignRole('Admin');
}


  if ($request->rol = 'AUDITOR'){

    $user2 = $user->id;
     User::find($user2); 
        $user->assignRole('Auditor');
}



//  $bitacoras = new Bitacora;

//  $bitacoras->user =  Auth::user()->name;
//  $bitacoras->lastname =  Auth::user()->lastname;
//  $bitacoras->action = 'Ha registrado un nuevo usuario';
//  $bitacoras->save();

       

        



       

        
        

        Alert::success('Operación realizada con éxito','¡Usuario registrado!');

        return redirect()->route('usuarios.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::find($id);

        return view('users.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\UserUpdateRequest $request, $id)
    {
    	$usersUpdate = User::findOrFail($id);
        $usersUpdate->email            = $request->email;
        $usersUpdate->password         = bcrypt($request->password);
        $usersUpdate->name             = $request->name;
        $usersUpdate->lastname         = $request->lastname;
        $usersUpdate->identification   = $request->identification;


        $usersUpdate->save();

        

 $bitacoras = new Bitacora;

 $bitacoras->user =  Auth::user()->name;
 $bitacoras->lastname =  Auth::user()->lastname;
 $bitacoras->action = 'Ha editado un usuario';
 $bitacoras->save();

    


        Alert::success('Operación realizada con éxito','¡Usuario editado!');

        return redirect()->route('usuarios.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        //
    }
}
