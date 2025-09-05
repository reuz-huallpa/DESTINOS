<div>
    <a href="{{ route('admin.usuarios') }}">Usuarios</a>
    <a href="{{ route('admin.compras') }}">Compras</a>
    <a href="{{ route('admin.reservas') }}">Reservas</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</div>
