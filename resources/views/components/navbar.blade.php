<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand pt-3" href="{{ url('/') }}"><img src="{{ url('images/logo.png') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-success font-weight-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }} 
              </a>
              <ul class="dropdown-menu">
                <li>
                  <form action="/logout" method="post">
                    @csrf
                  <button type="submit" class="dropdown-item text-success">Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            @else
            <li class="nav-item">
              <a href="{{ url('login') }}" class="nav-link text-success">Login</a>
            </li>
          @endauth
        </ul>
      </div>
  </div>
</nav>