@extends('layouts.master')

@push('styles')
<link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')
     <!-- BEGINNING OF SLIDESHOW -->
 <div id="slideshow">

   <div id="prevSlide">&lt;</div>
   @foreach ($events as $event)

      
 
  <div class="slide">
      <img class="slideshow-background"
         src={{"/images/".$event->background}}>
      <div class="slideshow-mask"></div>
      <div class="slideshow-body">
        <h2>{{$event->title}}</h2>
        <div class="slideshow-content">
            <div class="slide-info">
                <p class="slide-regie">{{$event->regizor}}</p>
                <br>
                <p class="slide-descriere">{{$event->description}}</p>
                <br>
                <div class="slide-format">
                    <div>
                    <p class="slide-locatie">{{$event->location}}</p>
                    <p class="slide-data">{{$event->formattedDate().' '.$event->formattedTime()}}</p>
                    </div>
                    <button class="slide-bttn">Cumpara Acum</button>
                </div>
            </div>
            <img class="slide-img" src={{"/images/".$event->poster}}>
          </div>
          <p class="slide-data-resp">{{$event->formattedDate().' '.$event->formattedTime()}}</p>
          <button class="slide-bttn-resp">Cumpara Acum</button>
      </div>
  </div>
  @endforeach
  <div id="nextSlide">&gt;</div>
</div>
<!-- END OF SLIDESHOW -->

<div class="container" id="home-events">
  <div class="row">
    @foreach ($events as $event)
      <div class="col-md-6">
        <div class="_card">
          <p style="margin-bottom: 0; font-size: 24px;">
            {{$event->title}}
          </p>
          <p style="color:gray; font-size: 12px; margin-bottom: 30px;">
            by {{$event->regizor}}
          </p>
          <p>
            {{$event->locatie}}
          </p>
          <p>
            {{$event->formattedDate().' '.$event->formattedTime()}}
          </p>
        <a class="buy-btn" href="{{ route('event', ['id'=> $event->id]) }}">Buy now</a>
          
           <img class="slide-img" src={{"/images/".$event->poster}}>
          
        </div>
      </div>
    @endforeach
  </div>
</div>

<br>
<br>
<br>
<br>
@endsection

@push('scripts')
  <script src="/js/slideshow.js"></script>
@endpush
