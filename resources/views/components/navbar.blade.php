<nav class="navbar navbar-expand-lg  bg-body-tertiary rounded pt-3 " aria-label="Eleventh navbar example">
    <div class="container-fluid ">
        <a class="navbar-brand px-5 text-light" href="{{ route('homepage') }}"><i
                class="fa-brands fa-spotify fa-flip fa-lg m-3" style="color: #fafafa;"></i></i>Music Blog</a>
        <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarsExample09">

            <form role="search" class="spotify-search position-absolute top-10 start-50 translate-middle-x  "><a
                    href="{{ route('homepage') }}"><i class="fa-solid fa-house faSearch pt-1"
                        style= "color: #ffffff;"></i></a>
                <input type="text" class="px-3 " placeholder="Cerca..." />
                <button type="submit">
                    <i class="fa-solid fa-search "></i>
                </button>
            </form>
            <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link text-light active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('song.create') }}">Inserisci canzoni</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-light" href="{{ route('song.index') }}" aria-disabled="true">Le tue
                        canzoni</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('user.dashboard') }}">Profilo utente</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                            <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                                @csrf
                            </form>
                        @else
                        </ul>
                    </li>
                    @guest
                        <p class="text-light  m-1 mx-4  ">Ciao, Ospite</p>
                    @endguest
                </ul>
                <button class="btn btn-danger m-2" href=><a href="{{ route('login') }}">Accedi</a></button>
                <button class="btn btn-danger "><a href="{{ route('register') }}">Registrati</a></button>
            @endauth
        </div>
    </div>
</nav>
