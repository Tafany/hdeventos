@extends('layouts.app')

@section('title', 'HD Eventos')

@section('content')


    <h1>Dados</h1>
    @if (10 > 15)
        <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if ($nome == 'Pedro')
        <p>O nome é Pedro</p>
    @elseif($nome == 'Rodrigo')
        <p> O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
    @else
        <p>O nome não é Pedro</p>
    @endif

    @foreach ($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
    @endforeach



    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} -{{ $i }}</p>
        @if ($i == 2)
            <p>O i é 2</p>
        @endif
    @endfor


@endsection
