<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        
        //comando "Event::all()" pega todos os dados do banco
        $events = Event::all();
        //enviando dados para a view "welcome".
        return view('welcome', ['events' => $events]);

    }

    public function create(){
        return view('events.create');
    }
}
