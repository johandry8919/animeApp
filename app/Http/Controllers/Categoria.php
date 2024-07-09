<?php

namespace App\Http\Controllers;

use App\models\categoria as ModelsCategoria;
use Illuminate\Http\Request;

class Categoria extends Controller
{
  
    

    public function categoria()


    {
        $categoria = ModelsCategoria::all();

        echo json_encode($categoria);
        exit;
        return view('categoria');
    }
}
