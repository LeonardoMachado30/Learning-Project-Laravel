@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <!-- Imprimindo dados do banco de dados-->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="custom-background bg-custom">
                    <form action="/" method="GET" class="">
                        <div class="mb-5">
                            <input class="form-control" type="text" id="search" name="search"  placeholder="Pesquisar" />
                        </div>    
                    </form>
                </div>
            </div>      
        </div>

        @if($search)
        <div class="row">
            <div class="col">
                <div class="">
                    <h2>buscando por: {{ $search }} </h2> 
                </div>
            </div>
        </div>
        @else
        <div class="row g-0">
            <div class="col">
                <h2 class="display-8">Proximos eventos</h2>
            </div>
        </div>            
        @endif

        <div class="row row-cols-md-4 g-0 container-custom">
            @foreach($events as $event)
            <div class="col g-4">
                <div class="card border">
                    <img src="/img/events/{{ $event->image  }}" class="card-img-top img-fluid image-custom" alt="...">
                    <div class="card-body">
                        <p class="card-text"><ion-icon name="calendar-outline"></ion-icon> {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}  </p>
                        <h5 class="card-title">Título: {{ $event->title }}</h5>
                        <p>Participantes: {{ count($event->users) }}</p>
                        <p class="card-text">Descrição: {{ $event->description }}</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary" tabindex="-1" role="button">Saiba Mais</a>
                    </div>
                </div>
            </div>
            @endforeach
            
            @if(count($events) == 0 && $search)
            <div class="col" style="color: white;">
                <h3>Não foi possivel encontrar nem um evento com o nome: {{ $search }}! </h3>
            </div>
            @elseif(count($events) == 0)
            <div class="col" style="color: white;">
                <h3>Não ha eventos diponíveis</h3>  
            </div>
            @endif
        </div>

    </div>  
    {{-- Comentario pelo Blande --}}

@endsection