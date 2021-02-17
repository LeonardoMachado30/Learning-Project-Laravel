<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    //criando um cast, para que o banco 
    //entenda que e um array e nao uma string
    protected $casts = [
        'items' => 'array'
    ];
    
    //Criando uma variavel do tipo protect com o dado Data
    protected $date = ['date'];
    
    //Descartando o token da edição
    protected $guarded = [];

    //chamando somente 1 usuario
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
