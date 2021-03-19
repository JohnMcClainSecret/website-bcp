  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
        <div class="logo float-left">
                {{-- <h1 class="text-light" style="margin-top: 20px"><a href="/"><span>BCP Broker</span></a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/"><img src="{{ asset('img/logo2.png')}}" alt="" class="img-fluid"></a>
        </div>
        <nav class="nav-menu float-right d-none d-lg-block" style="margin-top: 25px">
            <ul>
            <li class="active"><a href="/">Home</a></li>
            <li><a href="{{ url('..#about/')}}">About Us</a></li>
            <li><a href="{{ url('..#services/')}}">Services</a></li>
            <li><a href="{{ url('..getanoffer/')}}">Get an Offer</a></li>
            {{-- <li><a href="{{ route('login')}}">Login</a></li> --}}
            {{-- <li><a href="#team">Team</a></li>
            <li class="drop-down"><a href="">Drop Down</a>
                <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="drop-down"><a href="#">Drop Down 2</a>
                    <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
                </ul>
            </li> --}}
            <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
