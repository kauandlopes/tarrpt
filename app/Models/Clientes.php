<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model {
    protected $table = 'cliente';
    protected $fillable = [
        'nome',
        'cnpj',
        'segmento',
        'id_organizacao', 
    ];

    //cliente 1:1 organização
    public function organizacao()
    {
        return $this->belongsTo(Organizacoes::class, 'id_organizacao', 'id');
    }

    // cliente 1:N  RPTs
    public function rpts()
    {
        return $this->hasMany(Tarrpt::class, 'id_cliente', 'id');
    }
}
