<style>
    .nav-link[data-toggle].collapsed:after {
        content: " ▾";
    }

    .nav-link[data-toggle]:not(.collapsed):after {
        content: " ▴";
    }

</style>


{{-- <li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li> --}}
<li class="side-menus {{ Request::is('autos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('autos.index') }}"><i class="fas fa-car-alt"></i><span>Autos</span></a>
</li>

{{-- <li class="side-menus {{ Request::is('discoDuros*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('discoDuros.index') }}"><i class="fas fa-save"></i><span>Disco Duros</span></a>
</li> --}}

<li class="side-menus {{ Request::is('documentoAutos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('documentoAutos.index') }}"><i class="fas fa-laptop"></i><span>Expedientes
            Autos</span></a>
</li>

<li class="side-menus {{ Request::is('mantenimientoAutos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('mantenimientoAutos.index') }}"><i
            class="fas fa-building"></i><span>Mantenimiento Autos</span></a>
</li>


{{-- <li class="side-menus {{ Request::is('equipos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('equipos.index') }}"><i class="fas fa-building"></i><span>Equipos</span></a>
</li> --}}
<li class="side-menus">
    <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i
            class="fa fa-table"></i> <span class="d-none d-sm-inline">Catalogos</span></a>
    <div class="collapse" id="submenu1" aria-expanded="false">
        <ul class="pl-2 flex-column nav">
            <li class="side-menus {{ Request::is('marcaEquipos*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('marcaEquipos.index') }}"><i
                        class="fas fa-desktop"></i><span>Marcas</span></a>
            </li>

            <li class="side-menus {{ Request::is('modeloEquipos*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('modeloEquipos.index') }}"><i
                        class="fas fa-desktop"></i><span>Modelos</span></a>
            </li>

            {{-- <li class="side-menus {{ Request::is('rams*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('rams.index') }}"><i class="fas fa-desktop"></i><span>Rams</span></a>
            </li> --}}

            <li class="side-menus {{ Request::is('tipoEquipos*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('tipoEquipos.index') }}"><i class="fas fa-laptop"></i><span>Tipo
                        Equipos</span></a>
            </li>

            <li class="side-menus {{ Request::is('empleados*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('empleados.index') }}"><i
                        class="fas fa-user-tie"></i><span>Empleados</span></a>
            </li>

            <li class="side-menus {{ Request::is('proyectos*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('proyectos.index') }}"><i
                        class="fas fa-building"></i><span>Proyectos</span></a>
            </li>



        </ul>
    </div>
</li>

<li class="side-menus {{ Request::is('tallers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tallers.index') }}"><i class="fas fa-building"></i><span>Talleres</span></a>
</li>

<li class="side-menus {{ Request::is('tenencias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tenencias.index') }}"><i
            class="fas fa-building"></i><span>Tenencias</span></a>
</li>

<li class="side-menus {{ Request::is('usuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('usuarios.index') }}"><i class="fas fa-building"></i><span>Usuarios</span></a>
</li>

<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('verificacions.index') }}"><i
            class="fas fa-building"></i><span>Verificaciones</span></a>
</li>

<li class="side-menus {{ Request::is('arrendadoras*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('arrendadoras.index') }}"><i
            class="fas fa-building"></i><span>Arrendadoras</span></a>
</li>

<li class="side-menus {{ Request::is('contratos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('contratos.index') }}"><i
            class="fas fa-building"></i><span>Contratos</span></a>
</li>

<li class="side-menus">
    <a class="nav-link" href="https://data.finanzas.cdmx.gob.mx/consulta_adeudos" target="_blank"><i
            class="fas fa-building"></i><span>Multas</span></a>
</li>
