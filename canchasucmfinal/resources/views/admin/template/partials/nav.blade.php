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

      

    </ul>
  </div>
</nav>
</nav>