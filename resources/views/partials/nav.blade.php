<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
            
        </div>

        <ul class="nav navbar-nav">
            <li class="bdl1"><a href="#"><i class="fa fa-search"></i></a></li>
            
        </ul>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('posts.create') }}"><i class="fa fa-plus"></i></a>
                </li>
                @if(Auth::user())
                    @if(!Auth::user()->confirmed())
                        <li class="bdl1">Confirm your email address, <a href="{{ url('/confirm') }}">Resend link</a></li>
                    @endif
                @endif
                @if(Auth::guest())
                    <li class="bdl1"><a href="{{ url('/login') }}">Login</a></li>
                    <li class="hidden"><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="fs12"> 
                                <span class="fa fa-user"></span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{ route('profile',Auth::user()->username) }}">Profile</a></li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
