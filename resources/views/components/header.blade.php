<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('index') }}">Il mio blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blog.index')}}">Blog</a>
              </li>
              
              @if (auth()->check())
                @csrf
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('blog.create')}}">Aggiungi articolo</a>
                </li>
                <input type="submit" value="Logout" class="btn btn-primary">
              </li>
                <li class="nav-item">
                  <form action="/logout" method="post"></form>
                <li class="nav-item">
              @else
                  <a class="nav-link" href="/login">Accedi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/register">Registrati</a>
                </li>
              @endif
              
            </ul>
          </div>
        </div>
      </nav>
</header>