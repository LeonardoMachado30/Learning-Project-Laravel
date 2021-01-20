<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Flavio";

        $arr = [10,20,4555,2,5];

        $nomes = ["flavio", "Lais", "Rodrigo", "Joao"];

        return view('welcome', [
            'nome' => $nome,
            'arr' => $arr,
            'nomes' => $nomes
            ]);

    }

    public function create(){
        return view('events.create');
    }
}
