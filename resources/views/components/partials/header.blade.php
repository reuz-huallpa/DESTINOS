<nav class="d-flex align-items-center gap-2">
    <!-- Menú principal -->
    <a href="{{ route('pagina.inicio') }}"
       class="text-info text-decoration-none px-3 py-1 rounded-pill fw-semibold 
              link-underline link-underline-opacity-0 link-underline-opacity-75-hover 
              {{ request()->routeIs('pagina.inicio') ? 'bg-info bg-opacity-10' : '' }}">
        Inicio
    </a>

    <a href="{{ url('/paquetes') }}"
       class="text-info text-decoration-none px-3 py-1 rounded-pill fw-semibold 
              link-underline link-underline-opacity-0 link-underline-opacity-75-hover 
              {{ request()->is('paquetes*') ? 'bg-info bg-opacity-10' : '' }}">
        Paquetes
    </a>

    <a href="{{ route('paginas.ofertas') }}" 
       class="text-info text-decoration-none px-3 py-1 rounded-pill fw-semibold 
              link-underline link-underline-opacity-0 link-underline-opacity-75-hover 
              {{ request()->routeIs('pagina.ofertas') ? 'bg-info bg-opacity-10' : '' }}">
        Ofertas
    </a>

    <a href="{{ route('paginas.contacto') }}"
       class="text-info text-decoration-none px-3 py-1 rounded-pill fw-semibold 
              link-underline link-underline-opacity-0 link-underline-opacity-75-hover 
              {{ request()->routeIs('pagina.contacto') ? 'bg-info bg-opacity-10' : '' }}">
        Contacto
    </a>

    <!-- Autenticación -->
    @guest
        <a href="{{ route('login') }}" 
           class="btn btn-outline-info btn-sm ms-2 rounded-pill d-none d-md-inline">
           Iniciar sesión
        </a>
        <a href="{{ route('register') }}" 
           class="btn btn-info btn-sm ms-2 rounded-pill d-none d-md-inline">
           Registrarse
        </a>
    @else
        <a href="{{ route('mi-cuenta.perfil') }}" class="btn btn-outline-info btn-sm ms-2 rounded-pill">
    Mi Cuenta
</a>


        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" 
                class="btn btn-info btn-sm ms-2 rounded-pill d-none d-md-inline">
                Cerrar sesión
            </button>
        </form>
    @endguest
</nav>