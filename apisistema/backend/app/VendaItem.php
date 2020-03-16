<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendaItem extends Model
{
    protected $table = "vendas_itens";
    public $timestamps = false;
    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID_VENDAS',
        'ID_PRODUTO',
        'QTDE',
        'VALOR',
        'DESCONTO',
        'TOTAL '
    ];

    public function venda()
    {
        return $this->hasOne('App\Venda', 'ID', 'ID_VENDAS');
    }

    public function produto()
    {
        return $this->belongsTo('App\Produto', 'ID_PRODUTO', 'ID');
    }
}
