<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaMexicana extends Model
{
    protected $table = 'empresa_mexicana';
    protected $primaryKey = 'id_empresa_mex';
    public $timestamps = false;

    protected $fillable = [
        'nombre_empresa',
        'rfc',
        'sector',
        'direccion',
        'telefono',
    ];
}