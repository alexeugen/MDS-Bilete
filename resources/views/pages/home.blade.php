@extends('layouts.master')

@section('content')
     <!-- BEGINNING OF SLIDESHOW -->
 <div id="slideshow">

   <div id="prevSlide">&lt;</div>
   @foreach ($events as $event)

      
 
  <div class="slide">
      <img class="slideshow-background"
         src="/img/background1.jpg">
      <div class="slideshow-mask"></div>
      <div class="slideshow-body">
      <h2>{{$event->title}}</h2>
        <div class="slideshow-content">
            <div class="slide-info">
                <p class="slide-regie">post.regie</p>
                <p class="slide-actori">post.actori</p>
                <br>
                <p class="slide-descriere">{{$event->description}}</p>
                <br>
                <div class="slide-format">
                    <div>
                    <p class="slide-locatie">post.locatie</p>
                    <p class="slide-data">post.data</p>
                    </div>
                      <button class="slide-bttn">Cumpara Acum</button>
                  </div>
              </div>
              <img class="slide-img" src="/img/poster1.jpg">
          </div>
      </div>
  </div>
  @endforeach
  <div id="nextSlide">&gt;</div>
</div>
<!-- END OF SLIDESHOW -->

@endsection

@push('scripts')
  <script src="/js/slideshow.js"></script>
@endpush
