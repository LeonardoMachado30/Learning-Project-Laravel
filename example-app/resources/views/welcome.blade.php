@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <!-- Imprimindo dados do banco de dados-->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($events as $event)
                <div class="col">
                    <div class="card">
                        <img src="/img/events/{{ $event->image  }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text">{{ $event->description }}</p>
                            <a href="/events/{{ $event->id }}">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    {{-- Comentario pelo Blande --}}
@endsection