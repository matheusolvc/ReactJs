<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = "vendas";
    public $timestamps = false;
    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID_PESSOA',
        'ID_VENDEDOR',
        'DATA_EMISSAO',
        'FLG_EXCLUIDO',
        'TOTAL',
        'OBS '
    ];

    public function itens()
    {
        return $this->belongsToMany('App\Produto', 'vendas_itens', 'ID_VENDAS', 'ID_PRODUTO')->withPivot([
            'QTDE',
            'VALOR',
            'DESCONTO',
            'TOTAL '
        ]);
    }
}
