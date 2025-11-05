<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organizacoes extends Model {
    protected $table = 'organizacao';
    protected $fillable = [
        'nome',
        'segmento',
    ];

    // Relação: Uma organização tem muitos clientes
    public function clientes()
    {
        return $this->hasMany(Clientes::class, 'id_organizacao', 'id');
    }

    // Relação: Uma organização tem muitos RPTs através dos clientes
    public function rpts()
    {
        return $this->hasManyThrough(
            Tarrpt::class,
            Clientes::class,
            'id_organizacao', // Foreign key on Clientes table
            'id_cliente',     // Foreign key on Tarrpt table
            'id',             // Local key on Organizacoes table
            'id'              // Local key on Clientes table
        );
    }
}
