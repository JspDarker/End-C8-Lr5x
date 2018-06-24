<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <a class="navbar-brand pl-5 font-weight-bold" href="#">Dev@Hub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-uppercase small font-weight-bold text-dark" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase small font-weight-bold text-dark" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-uppercase small font-weight-bold text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <div class="my-2 my-sm-0 small">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mr-4">
                    <a class="nav-link text-uppercase font-weight-bold text-dark" href="#">Page@Kye</a>
                </li>

                @guest
                    <li class="nav-item active mr-3">
                        <a class="nav-link" href="{{ route('register') }}"><span class="text-warning"><i class="fa fa-user pr-2 "></i> Register</span></a>
                    </li>
                    <li class="nav-item active mr-4">
                        <a class="nav-link " href="{{ route('login') }}"><span class="text-primary"><i class="fa fa-unlock-alt pr-2 "></i> Login</span></a>
                    </li>
                @else
                    <li class="nav-item active mr-3">
                        <a class="nav-link"><span class="text-success"><i class="fa fa-user pr-2 "></i> {{ Auth::user()->name }}</span></a>
                    </li>
                    <li class="nav-item active mr-4">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span class="text-danger"><i class="fas fa-lock pr-2"></i> Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>