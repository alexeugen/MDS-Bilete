<header>
    <nav>
        <div id="nav-logo-area">
            <i class="fas fa-ticket-alt" style="font-size: 40px; color: gray;"></i>
            <a href="{{route('home')}}" style="list-style-type: none; margin-left:10px;">
               Bilete Teatru
                {{-- TO DO --}}
            </a>
        </div>
        <div id="nav-search-area">
            {{-- <input type="text" placeholder="Cauta spectacole"> --}}
        </div>
        <div id="nav-login-area">

            @auth
            <p class="user-name">{{Auth::user()->name}}</p>
            <a href="{{route('user.events')}}" style="margin-left:10px;" class="login-button">
                My Events
            </a>
            
            
            @if (Auth::user()->type == 'manager')
            <a href="{{route('manager.dashboard')}}" style="margin-left:10px;" class="login-button">
                Dashboard
            </a>
            @endif
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="login-button btn-logout">Logout</button>
            </form>
            @endauth
            @guest
            <a href="{{route('login')}}" class="login-button">
                Login
            </a>
            {{-- <a href="{{route('manager.login')}}" class="login-button">
            Login <br>as manager
            </a> --}}
            <a href="{{route('register')}}" class="login-button">
                Register
            </a>
            {{-- <a href="{{route('manager.register')}}" class="login-button">
            Register as manager
            </a> --}}
            @endguest

        </div>
        <div>
        </div>
    </nav>
</header>
