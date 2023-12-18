@extends('layouts.app')

@section('title', 'TITOLO')
<section class="py-5 details">
    <div class="container d-flex pt-5">
        <div class="">
            <div class="comic-thumb">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <h1>
                {{ $comic->title }}
            </h1>
            <div class="store d-flex ">
                <div class="price d-flex">
                    <div>
                        <p>U.S. Price: {{ $comic->price }}</p>
                        <p>Series: {{ $comic->series }}</p>
                        <p>Sale date: {{ $comic->sale_date }}</p>
                        <p>Type: {{ $comic->type }}</p>
                    </div>
                    <div>
                        Available
                    </div>
                </div>
                <div>
                    Check Availability
                </div>
            </div>
            <p>
                {{ $comic->description }}
            </p>
        </div>
        <div class="adv-img">
            <img src="{{ $comic->thumb }}" alt="">
        </div>
     </div>
</section>
@section('content')
    
@endsection