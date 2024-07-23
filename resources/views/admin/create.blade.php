@extends('layouts.admin')


@section('title', 'Videos')


@section('adminConte' )


        <div class="container mt-4">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('video'))
                <div class="alert alert-info">
                    Video ID: {{ session('video')->id }} - Título: {{ session('video')->nombre_video }}
                </div>
            @endif

            <!-- Formulario para crear un video o cualquier otro contenido -->
        </div>


    <div class="card">

       <div class="card-body">
        <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group">
                <label class="form-label" for="nombre_video">Titulo del Video:</label>
                <input class="form-control" type="text" name="nombre_video" id="nombre_video" required>
                
            </div>

            <div class="form-group">
                <label class="form-label" for="portada">Porta img:</label>
                <input class="form-control" type="file"  name="portada_img" id="portada_img" required>
                
            </div>

            <div class="form-group">
                <label class="form-label" for="episodios">Episodio:</label>
                <input class="form-control" type="number" name="episodios" id="episodios" required>
            </div>
        
           <div class="form-group">
            <label class="form-label" for="descripcion">Descripción:</label>
            <input type="text" class="form-control-lg" name="descripcion" id="descripcion" required>
           </div>
        

            <div class="form-group">
                <label class="form-label" for="genero">Género:</label>
                

                <select class="form-control" name="generos" id="generos">
                    <option value="0">Selecione una opcion</option>
                    @foreach($genero as $key => $value)
                        <option value="{{$value->id }}">{{$value->name}}</option>
                    @endforeach
                </select>
               
            </div>

    
           
           
        
           <div class="form-group">
            <label class="form-label" for="id_estado">Estado:</label>
       
            <select class="form-control" name="id_estado" id="id_estado">
                <option value="0">Selecione una opcion</option>

                @foreach($estado as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select>
           </div>


                   
        
           <div class="form-group">
            <label class="form-label" for="Servidores">Servidores:</label>
       
            <select class="form-control" name="Servidores" id="Servidores">
                <option value="0">Selecione una opcion</option>

                @foreach($servidor as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select>
           </div>
        

            <div  class="form-group">
                <label class="form-label">Subir video </label>
                <input disabled="true" class="form-control form-control-lg" type="file" id="url_video" name="url_video" accept="video/mp4,video/mov,video/avi,video/flv,video/mkv">
            </div>


            <div  class="form-group">
                <label class="form-label">post servidor</label>
                <input disabled="true"  class="form-control form-control-lg" type="text" name="link" id="link" placeholder="servidor ">
            </div>
          
        
            <button class="btn btn-danger" type="submit">Crear Video</button>
        </form>
       </div>
  
        </div>
    </div>


    <script  >

        
        document.getElementById("Servidores").addEventListener("change" , function(e){

            let link = document.getElementById("link")
            let url_video = document.getElementById("url_video")

            let servidor = e.target.value


            if(servidor == 1) link.disabled = false , url_video.disabled = true
                else if(servidor == 2) link.disabled = true , url_video.disabled = false

        })


    </script>
@endsection