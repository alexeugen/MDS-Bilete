@extends('layouts.master')

@section('content')
<div class="login-box">
    <form method="POST" action="{{ route('login') }}">
      <!--Security token-->
      @csrf
      <fieldset class="form-group">
          
          <legend class="style-txt">Login</legend>
          <div class="textbox">
            <i class="fas fa-user" aria-hidden="true"></i>
            <input id="email" type="email" id="form.username.id_for_label" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
 
             
          </div>
          
          <div class="textbox">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input id="password"   id="form.password.id_for_label" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

          </div>
      </fieldset>
      <div class="form-group">
          <button class="button btn btn-outline-info" type="submit">Sign in</button>
      </div>
  </form>
  <div>
      <small class="text-muted">Need an account? <a class="ml-2" href="{% url 'register' %}"> Sign Up Now</a></small>
  </div>
</div>
@endsection