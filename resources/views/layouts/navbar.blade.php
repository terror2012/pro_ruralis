<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="{{url('/')}}">Logo</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/about')}}">Despre Noi</a></li>
                <li><a href="{{url('/news')}}">Noutati</a></li>
                <li><a href="{{url('/gallery')}}">Galerie</a></li>
                <li><a href="{{url('/events')}}">Evenimente</a></li>
                <li><a href="{{url('/donations')}}">Doneaza</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{url('/sponsors')}}">Sponsori</a></li>
                @if(Auth::guest())
                    <li><a href="{{url('/login')}}"><b>Login</b></a></li>
                    @elseif(Auth::check())
                @if(Auth::user()->account_type === 3)
                        <li><a href="{{url('/adminPanel')}}"><b>Admin Panel</b></a></li>
                    @elseif(Auth::user()->account_type === 2)
                        <li><a href="{{url('/sponsorPanel')}}"><b>Sponsor Panel</b></a></li>
                    @elseif(Auth::user()->account_type === 1)
                        <li><a href="{{url('/dashboard')}}"><b>User Panel</b></a></li>
                    @endif
                @endif

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header>