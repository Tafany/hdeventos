@extends('layouts.app')

@section('title', 'Produto')

@section('content')
    @if ($id != null)
        <p>Exibindo produto id:{{ $id }}</p>
    @endif
@endsection
