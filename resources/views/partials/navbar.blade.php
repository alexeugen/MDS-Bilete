<header>
    <nav>
        <a href="{{route('home')}}">
            <div id="nav-logo-area">
                <img src="/img/twitter.png">
                <h1>Bilete Teatru</h1>
                {{-- TO DO --}}
            </div>
        </a>
        <div id="nav-search-area">
            {{-- <input type="text" placeholder="Cauta spectacole"> --}}
        </div>
        <div id="nav-login-area">

            @auth
            <p class="user-name">{{Auth::user()->name}}</p>



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
