<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'nombre_producto',
        'categoria',
        'tipo_producto',
        'es_controlado',
    ];
}
