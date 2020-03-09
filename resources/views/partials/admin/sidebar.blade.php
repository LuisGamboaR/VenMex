<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">
                <!-- Navbar Header--><a href="{{route('home')}}" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase"><strong
                            class="text-primary">Ven</strong><strong>Mex</strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div>
                </a>
                <!-- Sidebar Toggle Btn-->
                <button class="sidebar-toggle"><i class="fas fa-arrow-left"></i></button>
            </div>
            <div class="right-menu list-inline no-margin-bottom">


                <!-- Log out               -->
                <div class="list-inline-item logout"> <a id="logout" href="login.html" class="nav-link"
                        href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="icon-logout"></i> Cerrar Sesión

                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </div>
    </nav>
</header>
<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{ asset('assets/admin/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">{{Auth::user()->name}} {{Auth::user()->lastname}}</h1>
                <p>Web Designer</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
        <ul class="list-unstyled">
            <li class="active"><a href="{{route('home')}}"> <i class="icon-home"></i>Inicio </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                        class="fas fa-users" style="color:#6a6c70;"></i>Usuarios</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{route('usuarios.create')}}">Registrar</a></li>
                    <li><a href="{{route('usuarios.index')}}">Listado</a></li>
                </ul>
            </li>
            <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i
                        class="icon-windows" style="color:#6a6c70;"></i>Personal</a>
                <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                    <li><a href="{{route('personales.create')}}">Registrar</a></li>
                    <li><a href="{{route('personales.index')}}">Listado</a></li>
                </ul>
            </li>
            <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse">
            <i class="fas fa-suitcase"  style="color:#6a6c70;"></i>Clientes</a>
                <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                    <li><a href="{{route('clientes.create')}}">Registrar</a></li>
                    <li><a href="{{route('clientes.index')}}">Listado</a></li>
                </ul>
            </li>
            <li><a href="#exampledropdownDropdown4" aria-expanded="false" data-toggle="collapse"> <i
                        class="fas fa-calendar-week" style="color:#6a6c70;"></i>Eventos</a>
                <ul id="exampledropdownDropdown4" class="collapse list-unstyled ">
                    <li><a href="{{route('eventos.create')}}">Registrar</a></li>
                    <li><a href="{{route('eventos.index')}}">Listado</a></li>
                </ul>
            </li>
            <li><a href="#exampledropdownDropdown5" aria-expanded="false" data-toggle="collapse"> <i
                        class="fas fa-archive" style="color:#6a6c70;"></i>Utilerias</a>
                <ul id="exampledropdownDropdown5" class="collapse list-unstyled ">
                    <li><a href="{{route('utilerias.create')}}">Registrar</a></li>
                    <li><a href="{{route('utilerias.index')}}">Listado</a></li>
                </ul>
            </li>
            <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse">
            <i class="fas fa-truck"  style="color:#6a6c70;"></i>Proveedores</a>
                <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                    <li><a href="{{route('proveedores.create')}}">Registrar</a></li>
                    <li><a href="{{route('proveedores.index')}}">Listado</a></li>
                </ul>
            </li>
            <li><a href="#exampledropdownDropdown6" aria-expanded="false" data-toggle="collapse"> <i
                        class="fas fa-apple-alt" style="color:#6a6c70;"></i>Alimentos</a>
                <ul id="exampledropdownDropdown6" class="collapse list-unstyled ">
                    <li><a href="{{route('comidas.create')}}">Registrar</a></li>
                    <li><a href="{{route('comidas.index')}}">Listado</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Sidebar Navigation end-->
