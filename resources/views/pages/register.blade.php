@extends('layouts.master')

@section('content')
<div class="register-box">
    <form method="POST" action="{{ route('register') }}">
        @csrf
  

      <fieldset class="form-group">
    
          <legend class="style-txt">Join today</legend>
          <!--  form|crispy  -->
          <div class="textbox">
                <i class="fas fa-user" aria-hidden="true"></i>
                
                <input id="form.username.id_for_label" placeholder = "Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                       @if ($errors->has('name'))
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $errors->first('name') }}</strong>
                           </span>
                       @endif
          </div>
          <div> 
              {{-- <small class="txt">Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only.</small> --}}
         </div>
          <div class="textbox">
                <i class="fas fa-envelope" aria-hidden="true"></i>
                
                <input id="form.sender.id_for_label" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
          </div>
          <div class="textbox">
            <i class="fas fa-user" aria-hidden="true"></i>
            
            <select name="type">
                <option value="client">Client</option>
                <option value="manager">Manager</option>
              </select>

                            @if ($errors->has('select'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('select') }}</strong>
                                </span>
                            @endif
      </div>
          <div class="textbox">
                   <i class="fas fa-lock" aria-hidden="true"></i>
                  
                   <input id="form.password.id_for_label" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                       @if ($errors->has('password'))
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $errors->first('password') }}</strong>
                           </span>
                       @endif
          </div>
          
          {{-- <div><small class="txt">Your password can't be too similar to your other personal information.</small></div>
          <div><small class="txt">Your password must contain at least 8 characters.</small></div>
          <div><small class="txt">Your password can't be a commonly used password.</small></div>
          <div><small class="txt">Your password can't be entirely numeric.</small></div> --}}

           <div class="textbox">
                   <i class="fas fa-lock" aria-hidden="true"></i>
                   
                   <input id="form.password.id_for_label2" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required>
          </div>
      </fieldset>
      <div class="form-group">
          <button class="button" type="submit">Sign Up</button>
      </div>
  </form>
  <div>
      <small class="text-muted">Already have an account? <a class="ml-2" href="{% url 'login' %}">Sign In</a></small>
  </div>
</div>
@endsection