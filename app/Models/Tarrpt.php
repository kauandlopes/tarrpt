<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarrpt extends Model {
    protected $table = 'rpt';
    protected $fillable = [
        'nome',
        'versao',
        'tela',
        'segmento',
        'data',
        'hora',
        'endereco',
        'id_cliente' // Mudei de 'cliente' para 'id_cliente' (o campo real da tabela)
    ];

    protected $casts = [
        'data' => 'date',
    ];

    // Relação: Um RPT pertence a um cliente
    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'id_cliente', 'id');
    }

    // Relação: Um RPT pertence a uma organização através do cliente
    public function organizacao()
    {
        return $this->hasOneThrough(
            Organizacoes::class,
            Clientes::class,
            'id',              // Foreign key on Clientes table
            'id',              // Foreign key on Organizacoes table
            'id_cliente',      // Local key on Tarrpt table
            'id_organizacao'   // Local key on Clientes table
        );
    }
}
