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

    protected $date = ['date'];

}
