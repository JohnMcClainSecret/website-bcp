  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
        <div class="logo float-left">
            <a href="/"><img src="{{ asset('img/logo.png')}}" alt="" class="img-fluid"></a>
        </div>
        <nav class="nav-menu float-right d-none d-lg-block" style="margin-top: 25px">
            <ul>
            <li class="active"><a href="/">Home</a></li>
            <li><a href="{{ url('/#about/')}}">About Us</a></li>
            <li><a href="{{ url('/#services/')}}">Services</a></li>
            <li><a href="{{ url('getanoffer')}}">Get an Offer</a></li>

            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
            @else
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @endif
            
            <li><a href="{{ url('/#contact/')}}">Contact Us</a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
