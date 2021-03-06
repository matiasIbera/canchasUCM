<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.principal')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>


      <!-- CARRERAS --> 

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('carreras.index')}}">Carreras <span class="sr-only">(current)</span></a>
      </li>
      <!-- Usuarios--> 


      <li class="nav-item active">
        <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios <span class="sr-only">(current)</span></a>
      </li>



      <!-- CANCHAS --> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Canchas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('futbolhorarios.index')}}">Futbol</a>
          <a class="dropdown-item" href="{{ route('babyhorarios.index')}}">Baby</a>
          <a class="dropdown-item" href="{{route('tenishorarios.index')}}">Tenis</a>
        </div>
      </li>

            <!-- RESERVAS --> 
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reservas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('futbolreservas.index')}}">Futbol</a>
          <a class="dropdown-item" href="{{ route('babyreservas.index')}}">Baby</a>
          <a class="dropdown-item" href="{{route('tenisreservas.index')}}">Tenis</a>
        </div>
      </li>
      <ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul>
      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->type=="admin")
                                    <a class="dropdown-item" href="{{route('home')}}"> <!-- esta funcion permite al usuario ir a la vista de administrador si es que lo es -->
                                        {{ __('Vista de Cliente') }}
                                    </a>
                                    @endif
                                    @if(Auth::user()->type=="admin")                                    
                                    <a class="dropdown-menu dropdown-menu-right" aria labelledby="navbarDropdown"> 
                                        <a class="dropdown-item" href="{{route('coordinador')}}"> 
                                        {{ __('Coordinador de Futbol') }}
                                        </a>
                                        <a class="dropdown-item" href="{{route('coordinadorT')}}"> 
                                        {{ __('Coordinador de Tenis') }}
                                        </a>
                                        <a class="dropdown-item" href="{{route('coordinadorB')}}"> 
                                        {{ __('Coordinador de Baby') }}
                                        </a>                                        
                                    </a>
                                    @endif
                                    @if(Auth::user()->type=="admin")
                                    <a class="dropdown-item" href="{{route('admin.principal')}}"> <!-- esta funcion permite al usuario ir a la vista de administrador si es que lo es -->
                                        {{ __('Vista de Administrador') }}
                                    </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('usuarios.edit', $id=auth::id()) }}"> <!-- esta funcion permite al usuario ir a la vista para editar los datos de su perfil -->
                                        {{ __('Editar Perfil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        
                                        onclick="event.preventDefault(); return confirm('¿Quiere cerrar sesión?')&&document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

      

    </ul>
  </div>
</nav>
</nav>