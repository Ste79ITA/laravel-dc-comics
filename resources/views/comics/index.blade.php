@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<section class="py-5">
    <div class="container d-flex flex-column align-items-center">
        <h1 class="title">COMICS</h1>
        <a class="btn btn-primary" href="{{ route('comics.create') }}">Crea Nuovo Fumetto</a>
        <div class="comic-row row d-flex ">
            @foreach ($comics as $comic)
            <div class="col-2 p-3">
                <a href="{{ route('comics.show', $comic) }}">
                    <div class="img-container">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                    <p class="comic-title pt-2">{{ $comic['title'] }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection