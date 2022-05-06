

  
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Polisam Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        <a class="nav-link {{ ($title === "All Posts") ? 'active' : '' }}" href="/posts">Blog</a>
        <a class="nav-link {{ ($title === "Post Categories") ? 'active' : '' }}" href="/categories">Category</a>
        <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
      </div>
    </div>

    
    <ul class="navbar-nav ms-auto">
      @auth

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcom back, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <a href="/logout" class="dropdown-item">Logout</a>
          </li>
        </ul>
      </li>
  
      @else
      <li class="nav-item">
        <a class="nav-link active" href="/login">Login</a>
      </li>
      @endauth
    </ul>

</nav>


</div>

