<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function sobreNosotros()
    {
        return view('sobre-nosotros');
    }

    public function contacto()
    {
        return view('contacto');
    }


    public function animeDetails()
    {
        return view('components.anime-details');
    }

    public function animeWatching(Request $request)
    {

     

        return view('components.anime-watching');
    }

    public function blogDetails()
    {
        return view('components.blog-details');
    }

    public function blog()
    {
        return view('components.blog');
    }

    public function categories()
    {
        return view('components.categories');
    }

    public function login()
    {
        return view('components.login');
    }

    public function signup()
    {
        return view('components.signup');
    }
}
