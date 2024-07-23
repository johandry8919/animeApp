@extends('layouts.admin')


@section('title', 'Crear portada')


@section('adminConte')


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



<h1>adminConte</h1>

    
@endsection