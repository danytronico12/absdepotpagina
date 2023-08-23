<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacteno extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'telefono',
        'email',
        'comentario'
    ];
}
