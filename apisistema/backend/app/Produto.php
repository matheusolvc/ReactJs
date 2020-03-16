<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produtos";
    public $timestamps = false;
    protected $primaryKey = 'ID';

    protected $fillable = [
        'NOME',
        'GTIN',
        'REFERENCIA',
        'GRUPOID',
        'UNIDADE',
        'FLG_ATIVO',
        'FLG_EXCLUIDO',
        'FLG_FRACIONA',
        'FLG_BALANCA',
        'NCM',
        'CEST',
        'CST_ORIGEM',
        'SUBSTITUICAO_TRIB',
        'QTDE_CXA',
        'VALIDADE',
        'PRCUSTO',
        'PRECO'
    ];
}
