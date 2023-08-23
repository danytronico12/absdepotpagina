<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ddi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'telefono',
        'email',
        'instagram',
        'edad',
        'razon',
    ];
}
