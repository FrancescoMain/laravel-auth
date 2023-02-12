<header>    
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-12 cont">
                    <a href="{{ url('/') }}">
                        <div class="logo">
                            <img src="/logo.png" alt="">
                        </div>
                    </a>

                        <!-- Right Side Of Navbar -->
                    <ul>
                        <li>
                            <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                        <li >
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
        
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
                </div>
            </div>
    </nav>
</header>
