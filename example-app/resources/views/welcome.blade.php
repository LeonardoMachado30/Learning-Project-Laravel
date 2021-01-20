@extends('layouts.main')

@section('title', 'HDC Events')

    <h1>Alguma coisa</h1>
    @if(10 < 5)
        <p>A condição e verdadeira</p>
    @else
        <p>a condição nao e verdadeira</p>
    @endif

    <p>{{ $nome }}</p>

    @if($nome == "Flavio")
        <p>o nome e {{ $nome }}</p>
    @else
        <p>O nome nao e {{ $nome }}</p>
    @endif

    @for($i = 0; $i < count($arr); $i++)
        <p> {{ $arr[$i] }} - {{ $i }} </p>
        @if($i == 2)
            <p>o array e igual a 2</p>
        @endif
    @endfor

    @php
        $name = "Lais Lindona";
        echo $name;
    @endphp

    @foreach($nomes as $nome)
        <p> {{ $nome }} </p>
    @endforeach

    {{-- Comentario pelo Blande --}}
@section('content')

@endsection