@extends('layouts.master')

@push('styles')
    
<link href="/css/dashboard.css" rel="stylesheet">
@endpush

@section('content')
<div class="container" id="manager-dashboard">
  <h2>Dashboard</h2>
  <br>
  <br>
    <div class="row">
        <div class="col-md-6">
           <p>Welcome to your dashboard. Here you can add or see your current events.</p> 
        </div>
        <div class="col-md-6">
            <div class="_card text-center">
              <i class="fas fa-plus"></i>
         
              <a href="{{route('create.event')}}" class="btn-submit" style="display:block">Add event</a>
           
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
     
        <table class="table table-hover">
            <thead>
              <tr>
      
                <th scope="col">Title</th>
                <th scope="col">Director</th>
                <th scope="col">Location</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
              @foreach (Auth::user()->events as $event)
              <tr>
   
                <td>{{ $event->title }}</td>
                <td>{{ $event->regizor }}</td>
                <td>{{ $event->locatie }}</td>
                <td>{{ $event->formattedDate()}}</td>
                <td>{{ $event->formattedTime()}}</td>
                <td class="wrap-text">{{ $event->description}}</td>
              </tr>
                  
              @endforeach

            </tbody>
          </table>
    </div>
</div>
<br>
<br>
<br>
<br>
@endsection
