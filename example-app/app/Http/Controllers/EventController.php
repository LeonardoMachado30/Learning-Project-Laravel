<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

use App\Models\User;

class EventController extends Controller
{
    public function index()
    {
        //comando "Event::all()" pega todos os dados do banco
        $search = request('search');

        if ($search) {

            $events = Event::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $events = Event::all();
        }

        //enviando dados para a view "welcome".
        return view('welcome', ['events' => $events, 'search' => $search]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {

        $event = new Event;

        //reebendo os valores dos inputs da tela views/events/create
        $event->title = $request->title;
        $event->city = $request->city;
        $event->date = $request->date;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        //image uploado
        if ($request->hasfile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            //fazendo uma hash no formato MD5 e tranformando o nome do arquivo de imagem unico
            $imageName = md5($requestImage->getClientOriginalName() . Strtotime("now") . "." . $extension);

            //Movendo Imagem para a pasta de imagens
            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        //pegando o usuario logado
        $user = auth()->user();

        //atribundo o id do usuario para a chave estrangeira
        $event->user_id = $user->id;

        //metodo para salvar dados
        $event->save();

        //enviando feedback para usuario
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }


    public function show($id)
    {

        $event = Event::findOrFail($id);


        $user = auth()->user();
        $hasUserJoined = false;

        if($user) {
            $userEvents = $user->eventsAsParticipant->toArray();

            foreach($userEvents as $userEvent){
                if($userEvent['id'] == $id){
                    $hasUserJoined = true;
                }
            }
        }
        //Consultando usuario
        // Função first() procura o primeiro ID e encerra a busca
        // Função toArray() converte os dados para array
        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner, 'hasUserJoined' => $hasUserJoined]);
    }

    public function dashboard()
    {
        $user = auth()->user();

        $events = $user->events;

        $eventsAsParticipant = $user->eventsAsParticipant;

        return view('events.dashboard', 
        ['events' => $events, 'eventsasparticipant' => $eventsAsParticipant]);
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento excluido com sucesso!');
    }

    public function edit($id)
    {

        $user = auth()->user();


        $event = Event::findOrFail($id);

        //redirecionadno usuario caso ele nao seja dono do evento
        if($user->id != $event->user_id) {
            return redirect('dashboard');
        }

        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        //image uploado
        if ($request->hasfile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();
            //fazendo uma hash no formato MD5 e tranformando o nome do arquivo de imagem unico
            $imageName = md5($requestImage->getClientOriginalName() . Strtotime("now") . "." . $extension);

            $requestImage->move(public_path('img/events'), $imageName);

            $data['image'] = $imageName;
        }

        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!');
    }

    public function joinEvent($id) {

        $user = auth()->user();

        $user->eventsAsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Sua presença esta confirmada no evento');
    }

    public function leaveEvent($id) {
        $user = auth()->user();

        $user->eventsAsParticipant()->detach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Voce saiu com sucesso do evento');
    }
}