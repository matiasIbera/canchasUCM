	<!-- NAV CON Las opciones de registro de usuario e inicio de sesion-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.principal')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>


      <!-- Registro --> 

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('registro.create')}}">Registro <span class="sr-only">(current)</span></a>
      </li>
      <!-- Usuarios--> 


      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio de sesión <span class="sr-only">(current)</span></a>
      </li>

    </ul>
  </div>
</nav>
</nav>