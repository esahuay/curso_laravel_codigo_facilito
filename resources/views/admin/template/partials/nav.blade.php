<nav class="navbar navbar-default">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    @if(Auth::user())
      <ul class="nav navbar-nav">
        <li><img width="40px" height="40px" class="admin-logo-nav" src="{{ asset('image/laravel.png')}}"></li>
        <li><a href="{{ route('admin.index') }}">Inicio</a></li>
        <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
        <li><a href="{{ route('admin.categories.index') }}">Categorias</a></li>
        <li><a href="{{ route('admin.articles.index') }}">Articulos</a></li>
        <li><a href="{{ route('admin.images.index') }}">Imagenes</a></li>
        <li><a href="{{ route('admin.tags.index') }}">Tags</a></li>        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Pagina principal</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.auth.logout') }}">Salir</a></li>           
          </ul>
        </li>
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>