<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormasPgto extends Model
{
    protected $table = "formas_pagto";
    public $timestamps = false;
    protected $primaryKey = 'ID';

    protected $fillable = [
        'NOME',
        'PARCELAS',
        'DIAS',
        'FLG_BAIXAR',
        'FLG_EXCLUIDO',
        'FLG_ATIVO'
    ];
}
