<!-- <link rel="stylesheet" href="../resources/css/app.css"> No se pudo, no sabemos, :c
No se como pase react :c -->

<nav style = "background:#DE3838" class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a style="color:white" class="navbar-brand" href="{{route('home')}}">COMICS</a>
        <ul  class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a style="color:white" class="nav-link {{menuNavegation('home')}}" href="{{route('home')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a  style="color:white" class="nav-link {{menuNavegation('about')}}" href="{{route('about')}}">Categorías</a>
          </li>

          <li class="nav-item">
            <a style="color:white" class="nav-link {{menuNavegation('Comics')}}" href="{{route('Comics')}}">Comics</a>
          </li>
          <li class="nav-item">
            <a style="color:white" class="nav-link {{menuNavegation('personal')}}" href="{{route('personal')}}">Personal</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
