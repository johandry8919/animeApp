<?php

namespace App\Http\Controllers;

use App\models\categoria;
use Illuminate\Http\Request;

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
        return view('home');
    }


    public function categoria()


    {
        $categoria = categoria::all();

        echo json_encode($categoria);
        exit;
        return view('categoria');
    }
}
