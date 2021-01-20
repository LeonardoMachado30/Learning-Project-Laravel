@extends('layouts.main')

@section('title', 'Produto')

@section('content')
    @if($id != null)
        <p>Exibindo produto id: {{ $id }} </p>
    @else

    @endif
@endsection