<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'id',
        'generos',
        'episodios',
        'url_video',
        'descripcion',
        'nombre_video',
        'año_publicacion',
        'id_estado_emision',
        'id_servidor',
        'portada_img'
    ];
}
