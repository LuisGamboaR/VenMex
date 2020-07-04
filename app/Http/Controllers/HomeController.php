<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use App\Comida;
use App\Utileria;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $personallist = Personal::All();
        $personals = $personallist->count();

        $alimentolist = Comida::All();
        $alimentos = $alimentolist->count();

        $utilerialist = Utileria::All();
        $utilerias = $utilerialist->count();

   


        return view('home', compact('personals', 'utilerias', 'alimentos'));
    }
}
