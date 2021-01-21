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
        $event->description = $request->description;
        
        //image uploado
        if($request->hasfile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();
            //fazendo uma hash no formato MD5 e tranformando o nome do arquivo de imagem unico
            $imageName = md5($requestImage->getClientOriginalName() . Strtotime("now") . "." . $extension);

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        } 
        
        //metodo para salvar dados
        $event->save();

        //enviando feedback para usuario
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
}