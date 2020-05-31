<div class="page-wrapper">
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar2">
        <div class="logo">
            <a href="#">
                <img src="{{ asset('assets/admin/images/icon/royalty.png') }}" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar2__content js-scrollbar1">
            <div class="account2">
                <div class="image img-cir img-120">
                    <img src="{{ asset('assets/admin/images/icon/avatar-big-01.jpg') }}" alt="John Doe" />
                </div>
                <h4 class="name"> {{ Auth::user()->name}} {{ Auth::user()->lastname}} </h4>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="text-center"></i> Cerrar Sesión

                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>


            </div>
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="fas fa-home"></i></i>Inicio</a>
                    </li>


                    <li class="">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-calendar-week"></i>Eventos
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">


                            <a href="{{route('eventos.create')}}">Registrar</a>





                            <li>

                                <a href="{{route('eventos.index')}}">Listado</a>
                            </li>

                        </ul>
                    </li>

                    <li class="">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-truck"></i>Proveedores
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">


                            <a href="{{route('proveedores.create')}}">Registrar</a>




                            <li>

                                <a href="{{route('proveedores.index')}}">Listado</a>
                            </li>

                        </ul>
                    </li>

                    <li class="">
                        <a class="js-arrow" href="#">
                        <i class="fas fa-apple-alt"></i>Alimentos
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">


                            <a href="{{route('comidas.create')}}">Registrar</a>




                            <li>

                                <a href="{{route('comidas.index')}}">Listado</a>
                            </li>

                        </ul>
                    </li>


                    <li class="">
                        <a class="js-arrow" href="#">
                        <i class="fas fa-id-card-alt"></i>Personal
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">


                            <li>

                                <a href="{{route('personal.create')}}">Registrar</a>

                            </li>



                            <li>

                                <a href="{{route('personal.index')}}">Listado</a>
                            </li>

                        </ul>
                    </li>

                    <li class="">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-archive"></i>Utilerias
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">


                            <li>

                                <a href="{{route('utilerias.create')}}">Registrar</a>

                            </li>



                            <li>

                                <a href="{{route('utilerias.index')}}">Listado</a>
                            </li>

                        </ul>
                    </li>

                    <li class="">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-suitcase"></i>Clientes
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">

                            <li>

                                <a href="{{route('clientes.create')}}">Registrar</a>

                            </li>

                            <li>

                                <a href="{{route('clientes.index')}}">Listado</a>
                            </li>

                        </ul>
                    </li>


                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-users"></i>Usuarios
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">

                            <li>
                              
                            <li ><a href="{{route('usuarios.create')}}">Registrar</a></li>

                    </li>

                    <li>
                      
                    <li><a href="{{route('usuarios.index')}}">Listado</a></li>
                    </li>

                </ul>
                </li>



                <li class="">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-cog "></i>Mantenimiento
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="">
                                <i class="fa fa-cog "></i>Backup</a>
                        </li>

                        <li>
                            <a href="">
                                <i class="fas fa-cog"></i></i>Bitacora</a>
                        </li>

                    </ul>
                </li>








                </ul>
                </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->
