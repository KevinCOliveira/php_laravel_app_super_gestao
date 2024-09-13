<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos(){
        //return $this->belongsToMany('App\Produto', 'pedidos_produtos');
        return $this->belongsToMany('App\Item', 'pedidos_produtos','pedido_id','produto_id');
        /*
        1- Modelo de relacionamento NxN em relação ao modelo que estamos implementando
        2- É a tabela auxiliar que armazena os registros relacionados 
        3- Representa o nome da fk da tabela mapeada pelo modelo na tabela de relacionamento
        4- Representa o nome da fk da tabela mapeada pelo model utilizado no relacionamentoque estamos implementando
        */ 

    }
}
