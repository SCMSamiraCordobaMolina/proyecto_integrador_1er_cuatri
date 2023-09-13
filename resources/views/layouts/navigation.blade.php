<ul>
    <li><a href="{{ route('estudiantes.index') }}">Estudiantes</a></li>
    <li><a href="{{ route('maestros.index') }}">Maestros</a></li>

</ul>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item" {{ request()->routeIs('estudiantes.index') ? 'active' : '' }}>
                  <a class="nav-link" href="{{route('estudiantes.index')}}">Estudiantes</a>
                </li>
                <li class="nav-item" {{ request()->routeIs('maestros.index') ? 'active' : '' }}>
                    <a class="nav-link" href="{{route('maestros.index')}}">Maestros</a>
                </li>

            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @guest
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('registro') ? 'active' : '' }}" aria-current="page"
                          href="{{ route('registro') }}">Registro</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}"
                          href="{{ route('login') }}">Login</a>
                  </li>
              @endguest
              @auth
                  <li class="nav-item">
                      <form action="{{ route('logout') }}" method="POST">
                          @csrf
                          <button>logout</button>
                      </form>
                  </li>
              @endauth
           </ul>
        </div>
    </div>
</nav>


