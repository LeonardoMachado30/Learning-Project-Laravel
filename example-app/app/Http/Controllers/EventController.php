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

    public function store(Request $request){

        $event = new Event;
        //reebendo os valores dos inputs da tela views/events/create
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        //metodo para salvar dados
        $event->save();

        return redirect('/');
    }
}