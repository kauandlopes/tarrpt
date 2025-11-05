<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model {
    protected $table = 'cliente';
    protected $fillable = [
        'nome',
        'cnpj',
        'segmento',
        'id_organizacao', // Corrigi o nome do campo (tinha acento)
    ];

    // Relação: Um cliente pertence a uma organização
    public function organizacao()
    {
        return $this->belongsTo(Organizacoes::class, 'id_organizacao', 'id');
    }

    // Relação: Um cliente tem muitos RPTs
    public function rpts()
    {
        return $this->hasMany(Tarrpt::class, 'id_cliente', 'id');
    }
}
