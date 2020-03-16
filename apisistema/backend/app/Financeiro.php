<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financeiro extends Model
{
    protected $table = "financeiro";
    public $timestamps = false;
    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID_REFERENCIADO',
        'ID_FPAGTO',
        'DATA_EMISSAO',
        'VALOR',
        'DESCONTO',
        'ACRESCIMO',
        'TOTAL',
        'VALOR_PAGO',
        'DATA_PAGO',
        'FLG_RP',
        'FLG_EXCLUIDO'
    ];
}
