<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = 'peliculas';

    protected $fillable=[
        'titulo',
        'genero'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
