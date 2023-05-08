@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
    <h1>Tela de Produtos</h1>

    @if ($busca != '')
        <p> O usuário está buscando por: {{ $busca }}</p>
    @endif
@endsection
