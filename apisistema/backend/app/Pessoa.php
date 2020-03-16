<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = "pessoa";
    public $timestamps = false;
    protected $primaryKey = 'ID';

    protected $fillable = [
        'NOME',
        'FANTASIA',
        'CPF_CNPJ',
        'RG_IE',
        'NASCTO',
        'FLG_ATIVO',
        'FLG_EXCLUIDO',
        'FLG_BLOQUEADO',
        'FLG_CLI',
        'FLG_FOR',
        'FLG_FUN',
        'EMAIL',
        'LIMITE_CREDITO'
    ];
}
