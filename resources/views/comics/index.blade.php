@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<section class="py-5">
    <div class="container d-flex flex-column align-items-center">
        <h1 class="title">COMICS</h1>
        <div class="comic-row row d-flex">
            @foreach ($comics as $comic)
            <div class="col-2 p-3">
                <a href="#">
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