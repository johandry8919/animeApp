<?php
namespace App\Http\Controllers;

use App\models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth:admin');
    }
    public function index()

    
    {
        $sesion = Auth::guest(); 

        
        if($sesion) $sesion = true ; else $sesion = false ; 

        return view('admin.index' , ['sesion' => $sesion ]); 
    }
    
    public function showLoginForm()
    {
        $sesion = Auth::check() ; 
        if($sesion) $sesion = true ; else $sesion = false ; 
        return view('admin.auth.login' , ['sesion' => $sesion ]);
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::guard('admin')->attempt($credentials)) {
            
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withErrors(['email' => 'Credenciales incorrectas']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}