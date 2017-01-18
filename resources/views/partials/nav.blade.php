<div class="container-fluid ff-source-sans">
    <div class="pull-right pdt10">
        <ul class="list-inline navigation fs12">
            <li><a href="#">Search</a></li>
            @if(Auth::user())
                @if(!Auth::user()->confirmed())
                    <li><a href="#">Confirm your email address</a></li>
                @endif
            @endif
            @if(Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li class="hidden"><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="fs12"> 
                            <span class="fa fa-user"></span>
                            {{ ucfirst(Auth::user()->name) }}
                            <span class="caret"></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="{{ route('posts.create') }}">Create Post</a></li>
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
</div>


<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="post.html">Sample Post</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
