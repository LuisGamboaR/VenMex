<div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="{{ asset('assets/admin/images/icon/logo-white.png') }}" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-f-menu">
                                 
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                            </span>
                                        </form>
                                    </div>
                                </div>
                              
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('assets/admin/images/icon/logo-white.png') }}" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
                        </div>
                        <h4 class="name">{{ Auth::user()->name}} {{ Auth::user()->lastname}}</h4>
                        <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
   
                 @can('eventos.index')
                 <li class="">
                     <a class="js-arrow" href="#">
                         <i class="fas fa-credit-card"></i>Eventos
                         <span class="arrow">
                             <i class="fas fa-angle-down"></i>
                         </span>
                     </a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                     @can('eventos.create')

                 <a href="{{route('eventos.create')}}">Registrar</a>
          
     
                         @endcan
                         @can('eventos.index')

                         <li>
          
                           <a href="{{route('eventos.index')}}">Listado</a>
                         </li>
                         @endcan
                     </ul>
                 </li>
                 @endcan
                 @can('gastos.index')
                 <li class="">
                     <a class="js-arrow" href="#">
                         <i class="fas fa-credit-card"></i>Proveedores
                         <span class="arrow">
                             <i class="fas fa-angle-down"></i>
                         </span>
                     </a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                     @can('proveedores.create')

                   <a href="{{route('proveedores.create')}}">Registrar</a>
     
                         @endcan
                         @can('proveedores.index')

                         <li>
                             <a href="{{ route('compra.index')}}">
                             <a href="{{route('proveedores.index')}}">Listado</a>
                         </li>
                         @endcan
                     </ul>
                 </li>
                 @endcan
                 @can('personal.index')
                 <li class="">
                     <a class="js-arrow" href="#">
                         <i class="fas fa-credit-card"></i>Personal
                         <span class="arrow">
                             <i class="fas fa-angle-down"></i>
                         </span>
                     </a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                     @can('personal.create')

                         <li>
                         
                            <a href="{{route('personales.create')}}">Registrar</a>
     
                         </li>
                         @endcan
                         @can('personal.index')

                         <li>
                          
                        <a href="{{route('personales.index')}}">Listado</a>
                         </li>
                         @endcan
                     </ul>
                 </li>
                 @endcan
                 @can('utilerias.index')
                 <li class="">
                     <a class="js-arrow" href="#">
                         <i class="fas fa-th"></i>Utilerias
                         <span class="arrow">
                             <i class="fas fa-angle-down"></i>
                         </span>
                     </a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                     @can('utilerias.create')

                         <li>
               
                          <a href="{{route('utilerias.create')}}">Registrar</a>
            
                         </li>
                         @endcan
                         @can('utilerias.index')

                         <li>
                     
                            <a href="{{route('utilerias.index')}}">Listado</a>
                         </li>
                     @endcan
                     </ul>
                 </li>
                 @endcan
                 @can('clientes.index')
                 <li class="">
                     <a class="js-arrow" href="#">
                         <i class="fas fa-suitcase"></i>Clientes
                         <span class="arrow">
                             <i class="fas fa-angle-down"></i>
                         </span>
                     </a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                     @can('clientes.create')
                         <li>
                         
                             <a href="{{route('clientes.create')}}">Registrar</a>
           
                         </li>
                     @endcan
                     @can('clientes.index')
                         <li>
                        
                            <a href="{{route('clientes.index')}}">Listado</a>
                         </li>
                         @endcan
                     </ul>
                 </li>
                 @endcan
             @can('usuarios.index')
                 <li class="has-sub">
                     <a class="js-arrow" href="#">
                         <i class="fas fa-users "></i>Usuarios
                         <span class="arrow">
                             <i class="fas fa-angle-down"></i>
                         </span>
                     </a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                     @can('usuarios.create')
                         <li>
                             <a href="{{ route('usuarios.create') }}">
                             <li><a href="{{route('usuarios.create')}}">Registrar</a></li>
        
                         </li>
                      @endcan
                         <li>
                             <a href="{{ route('usuarios.index') }}">
                             <li><a href="{{route('usuarios.index')}}">Listado</a></li>
                         </li>
                     
                     </ul>
                 </li>
                 @endcan
               
                 
                 @can('backup.index')
                 <li class="">
                     <a class="js-arrow" href="#">
                         <i class="fa fa-cog "></i>Mantenimiento
                         <span class="arrow">
                             <i class="fas fa-angle-down"></i>
                         </span>
                     </a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                       
                         <li>
                             <a href="{{ route('backup.index') }}">
                                 <i class="fa fa-cog "></i>Backup</a>
                         </li>

                         <li>
                     <a href="{{ route('bitacoras.index') }}">
                     <i class="fas fa-cog"></i></i>Bitacora</a>
                          </li>
                     
                     </ul>
                        </li>
                        @endcan


                  
                        
                 
                    
                        
                            </ul>
                        </li>
                    </ul>
                </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->
