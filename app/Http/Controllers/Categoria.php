<?php

namespace App\Http\Controllers;

use App\models\Genero;
use Illuminate\Http\Request;

class Categoria extends Controller
{
  
    

    public function categoria()


    {
        $categoria = Genero::all();

        echo json_encode($categoria);
        exit;
        return view('categoria');
    }
}
