@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    {{ -- Imprimindo dados do banco de dados -- }}
    @foreach($events as $event)
        <p> {{ $event->title }} -- {{ $event->description }} </p>
    @endforeach
    {{-- Comentario pelo Blande --}}

@endsection