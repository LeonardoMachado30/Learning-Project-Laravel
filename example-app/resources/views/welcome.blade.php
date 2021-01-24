@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <!-- Imprimindo dados do banco de dados-->
    <div class="row">
        <div class="col">
            <img src="/img/imagem_de_fundo.jpg" alt="Imagem de Fundo" class="img-fluid">
            <div id="search-container" class="col-md-6 search-custom">
                <form action="/" method="GET" class="form-control-custom">
                    <label for="search" id="search" class="display-5 label-custom">Busque um evento</label>
                    <input class="form-control" type="text" id="search" name="search"  placeholder="Procurar">
                </form>
            </div>
        </div>
            
    </div>
    
    <div class="row">
        <div class="col">
            <div class="container-custom">
                @if($search)
                    <h2>buscando por: {{ $search }} </h2>
                @else
                    <h2>Proximos eventos</h2>
                @endif
                <div class="row row-cols-2 row-cols-md-3 g-6">
                    @foreach($events as $event)
                        <div class="col">
                            <div class="card border">
                                <img src="/img/events/{{ $event->image  }}" class="card-img-top img-fluid image-custom" alt="...">
                                <div class="card-body">
                                    <p class="card-text"> Data do evento: {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}  </p>
                                    <h5 class="card-title">Titulo: {{ $event->title }}</h5>
                                    <p class="card-text">Descrição: {{ $event->description }}</p>
                                    <a href="/events/{{ $event->id }}" class="btn btn-primary" tabindex="-1" role="button">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if(count($events) == 0)
                        <h3>Não a eventos disponiveis</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- Comentario pelo Blande --}}

@endsection