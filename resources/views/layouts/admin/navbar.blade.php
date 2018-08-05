<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{url('/adminPanel')}}">Pro Ruralis Administrator</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{url('/adminPanel')}}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Panou Control</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="{{url('/adminPanel/view_messages')}}">

                    <span class="nav-link-text nicecolor">Mesaje</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="{{url('/adminPanel/view_news')}}">

                    <span class="nav-link-text nicecolor">Noutati</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="../../../../../../Users/Cristian/Desktop/startbootstrap-sb-admin-gh-pages/tables.html">

                    <span class="nav-link-text nicecolor">Evenimente</span>

                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">

                    <span class="nav-link-text nicecolor">Sponsorizari</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text nicecolor">Setari</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="../../../../../../Users/Cristian/Desktop/startbootstrap-sb-admin-gh-pages/navbar.html">Navbar</a>
                    </li>
                    <li>
                        <a href="../../../../../../Users/Cristian/Desktop/startbootstrap-sb-admin-gh-pages/cards.html">Cards</a>
                    </li>
                </ul>
            </li>




        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link mr-lg-2" id="messagesDropdown" href="{{url('/adminPanel/view_messages')}}" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="indicator text-primary d-none d-lg-block">
              @if(model_count(\App\Eloquent\message_history::where('user_id', '=', Auth::user()->id)->where('status', '=', 0)->get()) > 0)
                        <i class="fa fa-fw fa-circle"></i>
                  @endif
            </span>
                </a>

            </li>
            <li class="nav-item">
                <a href="{{url('/logout')}}" class="nav-link">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>