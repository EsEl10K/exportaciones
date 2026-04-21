<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaExtranjera extends Model
{
    protected $table = 'empresa_extranjera';
    protected $primaryKey = 'id_empresa_ext';
    public $timestamps = false;

    protected $fillable = [
        'nombre_empresa',
        'pais',
        'ciudad',
        'contacto',
    ];
}