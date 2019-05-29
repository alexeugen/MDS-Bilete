@extends('layouts.master')

@push('styles')
    <link href="/css/add_event.css" rel="stylesheet">
@endpush

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container" id="add-event">
  <h2>Dashboard</h2>

    <div class="row">
    <form method="POST" action="{{ route('add.event') }}" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">

          @csrf
          <p>Title</p>
          <input name="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}">
          @if ($errors->has('title'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
          @endif
    
          <p>Director</p>
          <input name="director" type="text" class="form-control{{ $errors->has('director') ? ' is-invalid' : '' }}" value="{{ old('director') }}">
          @if ($errors->has('director'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('director') }}</strong>
          </span>
      @endif
          <p>Location</p>
          <input name="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" value="{{ old('location') }}">
          @if ($errors->has('director'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('director') }}</strong>
          </span>
      @endif
          <p>Date</p>
          <input class="datepicker" name="date" data-provide="datepicker" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ old('date') }}">
          @if ($errors->has('date'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('date') }}</strong>
          </span>
      @endif
          <p>Hour</p>
          <div class='input-group date' id='datetimepicker3'>
            <input type='text' name = 'hour' class="form-control" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-time" id="small-clock"></span>
            </span>
          </div>

          {{-- <input name="hour" type="text" class="form-control{{ $errors->has('hour') ? ' is-invalid' : '' }}" value="{{ old('hour') }}"> --}}
          @if ($errors->has('hour'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('hour') }}</strong>
          </span>
      @endif
        </div>
        <div class="col-md-6">
          <p>Description</p>
          <textarea name="description" id="" cols="30" rows="8" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" >{{ old('description') }}</textarea>
          @if ($errors->has('description'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('description') }}</strong>
          </span>
      @endif
      <p>Poster</p>
      <input type="file" name="poster"  class="form-control{{ $errors->has('poster') ? ' is-invalid' : '' }}" value="{{ old('poster') }}">
      @if ($errors->has('poster'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('poster') }}</strong>
          </span>
      @endif 
      <p>Background</p>
      <input type="file" name="background"  class="form-control{{ $errors->has('background') ? ' is-invalid' : '' }}" value="{{ old('background') }}">
      @if ($errors->has('background'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('background') }}</strong>
          </span>
      @endif 
        </div>
        </div>
  <input type="submit" class="btn-submit" value="Add event">
    </form>
    </div>

</div>
<br>
<br>
<br>
<br>

@endsection

@push('scripts')
<script src="/js/moment.js"></script>
<script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'LT'
        });
    });
  </script>
@endpush