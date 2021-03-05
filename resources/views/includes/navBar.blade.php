 <!-- Header -->
 <nav class="navbar top-nav navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{asset('logo.png')}}" class="logo" alt="logo">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex flex-fill justify-content-center mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#about">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#gallery">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#footer">Contact</a>
          </li>

        </ul>
        <form class="d-flex align-items-center mb-0" method="GET" accept="{{route("index")}}">
          <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>
