@extends('layouts.master')

@push('styles')
    <link href="/css/event.css" rel="stylesheet">
@endpush

@section('content')
<section class="ev-container">

    <!-- imaginea de coperta -->
    <!-- Eu am pus imaginea din css-->
<img class="header-cover" src="{{"/images/".$event->background}}"> 

    <!-- Culoare peste imaginea de coperta -->
    <!-- Am pus albastru dar sunt receptiv la sugestii :)) -->
    <section class="header-cover-mask">

    </section>
    <!-- TITLU EVENIMENT -->
    <h1 class="header-text">
        {{$event->title}}
    </h1>
    <section class="body-info">
        <div class="top-data">
            <div class="top-left-data">
                <div class="top-left-left-data">
                    <!-- <h3 class="info-text">The Guy Who Didn't Like Musicals</h3> -->
                    <!-- INFO EVENIMENT -->
                <p class="info-text">Director: {{$event->regizor}}</p>
                <p class="info-text">Location:{{$event->locatie}}</p>
                <p class="info-text">Date:{{$event->formattedDate()}}</p>
                <p class="info-text">Hour:{{$event->formattedTime()}}</p>
                </div>
                <div class="top-left-right-data">
                    <!-- BUTON DE ACHIZITIONARE -->
                    <a href="{{route('event.book', ['id' => $event->id])}}" class="bttn">
                        Buy now
                    </a>
                </div>
            </div>
        <div class="top-right-data" style="{{"background-image: url('/images/".$event->poster."')"}}">
                
            </div>
        </div>
        <div class="bottom-data">
            <!-- DESCRIERE EVENIMENT -->
            <p class="description-text">
                   {{$event->description}}
            </p>
        </div>
    </section>
    </section>

  
    
@endsection
