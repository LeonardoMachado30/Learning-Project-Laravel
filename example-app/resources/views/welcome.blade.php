@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <!-- Imprimindo dados do banco de dados-->
    <div class="container-lg">
        <div class="row row-cols-1 row-cols-md-3 g-5">
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
    
    {{-- Comentario pelo Blande --}}
@endsection