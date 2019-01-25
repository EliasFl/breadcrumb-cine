@extends('layout.template')

@section('title', 'Inicio')

@section('breadcrumbs')
    {{ Breadcrumbs::render('home') }}
@endsection

@section('content')
    Pagina de inicio
    <a href="{{ route('genres') }}">Ver generos</a>
@endsection