<nav id="Main_Navbar" class="navbar  navbar-expand-lg p-0">
    <div class="container-fluid">
      <a class="navbar-brand " href="{{route('homepage')}}"><img class="logo" src="{{Storage::url('/img/logo.png')}}" alt=""></a>
      <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-3 mb-lg-0">
          <li class="nav-item px-1">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-1 px-lg-3" href="{{route('article.index')}}">Articoli</a>
          </li>
          <li class="nav-item dropdown px-1">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach ($categories as $category)
                <li class="dropdown-item"><a  href="{{route('article.byCategory' , ['category'=>$category->id])}}"><i class="{{$category->icon}} fs-5 pe-2"></i> {{$category->name}} </a></li>
              @endforeach  
            </ul>
          </li> 
          
          @guest
          
          <li class="nav-item dropdown px-1 px-md-3">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accedi
            </a>
            <ul class="dropdown-menu menu-drop">
              <li><a class="dropdown-item link-drop" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item link-drop" href="{{route('login')}}">Login</a></li>
            </ul>
          </li>

          @else

          @if (Auth::user()->is_admin || Auth::user()->is_revisor || Auth::user()->is_writer)
          <li class="nav-item dropdown px-1">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Dashboards
            </a>
            <ul class="dropdown-menu menu-drop">
              @if (Auth::user()->is_admin)
                <li class="nav-item">
                  <a class="dropdown-item link-drop" href="{{route('admin.dashboard')}}">Dashboard Admin</a>
                </li> 
              @endif
              @if (Auth::user()->is_revisor)
                <li class="nav-item">
                  <a class="dropdown-item link-drop " href="{{route('revisor.dashboard')}}">Dashboard Revisore</a>
                </li> 
              @endif
              @if (Auth::user()->is_writer)
                <li class="nav-item">
                  <a class="dropdown-item link-drop " href="{{route('writer.dashboard')}}">Dashboard Redattore</a>
                </li> 
              @endif
            </ul>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link px-1" href="{{route('careers')}}">Lavora con noi</a>
          </li>           
          <li class="nav-item dropdown px-1">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu menu-drop">
              <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> 
              <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
              </form>             
            </ul>
          </li>
        </ul>              
        <a class="btn mx-2 mx-md-4 button_Nav mb-3 mb-xl-0" href="{{route('article.create')}}">Crea articolo</a>

        @endguest

        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <form class="d-flex mb-3 mb-md-0" action="{{route('article.search')}}" method="GET">
              <input type="search" class="form-control me-2" name="query" placeholder="Cosa cerchi" aria-label="Search">
              <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
        </div>            
             
        @if (Auth::check())
          <button id="myBtn" class="btn-search me-md-3" type="submit"><i class="fa-solid fa-magnifying-glass fs-4"></i></button> 
        @else
          <button id="myBtn" class="btn-search2 me-md-3" type="submit"><i class="fa-solid fa-magnifying-glass fs-4"></i></button>   
        @endif  
                            
      </div>
    </div>
</nav>    
 

  





