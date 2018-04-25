<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="/hqtcsdl/public">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <div class="dropdown">
            <a class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" href="#">Register</a>
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="{{url('/campanies/create')}}">Campany</a></li>
                    <li><a href="{{url('/candidates/create')}}">Candidate</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{url('/login')}}">Login</a>
        </li>
        </ul>
    </div>
    </div>
</nav>