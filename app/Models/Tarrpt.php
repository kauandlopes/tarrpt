<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarrpt extends Model {
    protected $table = 'rpt';//setando a tabela rpt
    protected $fillable = ['versao', 'tela', 'segmento', 'data', 'hora', 'endereco', 'cliente' ];
}
