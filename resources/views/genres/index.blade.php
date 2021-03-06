@extends('layout.template')

@section('title', 'Genres')

@section('breadcrumbs')
    {{ Breadcrumbs::render('genres') }}
@endsection

@section('content')
    <ul>
        @foreach ($genres as $genre)
            <li>
                {{ $genre->name }} <a href="{{ route('genres.show', $genre) }}">(Ver peliculas)</a>
            </li>
        @endforeach
    </ul>
@endsection