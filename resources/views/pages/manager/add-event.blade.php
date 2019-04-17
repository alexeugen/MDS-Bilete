@extends('layouts.master')

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container" id="add-event">
  <h2>Dashboard</h2>
  <br>
  <br>
    <div class="row">
    <form method="POST" action="{{ route('add.event') }}">
      @csrf
      <p>Title</p>
      <input name="title" type="text">
      <p>Director</p>
      <input name="director" type="text">
      <p>Location</p>
      <input name="location" type="text">
      <p>Date</p>
      <input class="datepicker" name="date" data-provide="datepicker">
      <p>Hour</p>
      <input name="hour" type="text">
      <p>Description</p>
      <textarea name="description" id="" cols="30" rows="10"></textarea>
      <input type="submit" class="btn-submit" value="Add event">
    </form>
    </div>

</div>


@endsection
