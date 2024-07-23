<?php

namespace App\Http\Controllers;

use App\models\Crear_portada;
use App\models\Emision;
use App\models\Genero;
use App\models\Servidore;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    // Muestra el formulario para crear un nuevo video
    public function create()
    {
        $sesion = Auth::guest(); 

        if($sesion) $sesion = true ; else $sesion = false ; 
        $genero = Genero::all();
        $estado = Emision::all();


        $servidor = Servidore::all();



        $arrayName = [
            'sesion' => $sesion,
            'genero' => $genero,
            'estado' => $estado,
            'servidor' => $servidor
        ];


         //dd($arrayName);

        return view('admin.create' , $arrayName); 
    }

    public function store(Request $request)
    {
        

        
        $request->validate([
            'nombre_video' => 'required|string|max:255',
            'generos' => 'required|string|max:255',
            'link' => 'required|string',
            'episodios' => 'required|integer',
            'id_estado' => 'required|integer',
            'Servidores' => 'required|integer'
        ]);


    
             if(isset($request->link)){

                $file = $request->file('portada_img');
                $filename = $file->getClientOriginalName();
                $path = "img_portada/{$request->nombre_video}/";
                $file->storeAs($path, $filename, 'public');
        
   
             Video::create([
                'nombre_video' => $request->nombre_video,
                'descripcion' => $request->descripcion,
                'generos' => $request->generos,
                'episodios' => $request->episodios,
                'id_estado_emision' => $request->id_estado,
                'url_video' => $request->link,
                'id_servidor' => $request->Servidores,
                'portada_img' => $filename,
            ]);        


          

            return redirect()->route('create.video')->with('success', 'Video actualizado con éxito.');
             
        }
         else {
            return back()->withErrors(['url_video' => 'El archivo de video es requerido.']);
          
        }
    }
    // Lista todos los videos
    public function index()
    {
        $videos = Video::all();
        return view('create.video', compact('videos'));
    }

    // Muestra un video específico
    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    // Muestra el formulario para editar un video
    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    // Actualiza un video en la base de datos
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'nombre_video' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'url_video' => 'nullable|file|mimes:mp4,mov,avi,flv,mkv',
            'genero' => 'required|string|max:255',
            'episodio' => 'required|integer',
            'id_estado' => 'required|integer'
        ]);

        // Handle the file upload
        if ($request->hasFile('url_video')) {
            // Delete the old file if exists
            if ($video->url_video && Storage::disk('public')->exists($video->url_video)) {
                Storage::disk('public')->delete($video->url_video);
            }

            $file = $request->file('url_video');
            $filename = $file->getClientOriginalName();
            $path = "videos/{$video->id}/";
            $file->storeAs($path, $filename, 'public');

            // Update the video record with the new URL
            $video->url_video = $path . $filename;
        }

        $video->update($request->except('url_video'));

        return redirect()->route('videos.index')->with('success', 'Video actualizado con éxito.');
    }

    // Elimina un video de la base de datos
    public function destroy(Video $video)
    {
        // Delete the file if exists
        if ($video->url_video && Storage::disk('public')->exists($video->url_video)) {
            Storage::disk('public')->delete($video->url_video);
        }

        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video eliminado con éxito.');
    }


    public function crear_portadas_view(){
        $sesion = Auth::guest(); 

        $genero = Genero::all();
        $estado = Emision::all();


        $servidor = Servidore::all();



        $arrayName = [
            'sesion' => $sesion,
            'genero' => $genero,
            'estado' => $estado,
            'servidor' => $servidor
        ];

        return view('admin.crear_portadas' ,$arrayName); 


    }


    public function crear_portadas_post(Request $request){

        $request->validate([
            'img' => 'required|string|max:255',
            'titulo' => 'required|string'
           
        ]);


        Crear_portada::create([
            'img' => $request->img,
            'titulo' => $request->descripcion
        ]);   
        
        
        return redirect()->route('create.video')->with('success', 'Video actualizado con éxito.');


    }
}