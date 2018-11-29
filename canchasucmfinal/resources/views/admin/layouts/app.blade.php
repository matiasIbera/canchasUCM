<nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __('Inicio')}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
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
                                        
                                        onclick="event.preventDefault(); return confirm('¿Quieres cerrar sesión?')&&document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
