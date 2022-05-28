<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="{{ asset('img/user/user-13.jpeg') }}" alt="">
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        {{ auth()->user()->name }}
                        <small>Front end developer</small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="fa fa-user"></i> Mi perfil</a></li>
                    <li><a href="javascript:;"><i class="fa fa-sign-out"></i> Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub {{ Route::is('admin.index') ? 'active' : '' }}">
                <a href="{{ route('admin.index') }}">
                    <i class="fa fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="has-sub {{ Route::is('admin.users') ? 'active' : '' }}"><a href="/admin/users"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
            <li class="has-sub {{ Route::is('admin.customers') ? 'active' : '' }}"><a href="/admin/customers"><i class="fa fa-user-plus"></i> <span>Clientes</span></a></li>
            <li class="has-sub {{ Route::is('admin.bookings') ? 'active' : '' }}"><a href="/admin/bookings"><i class="fa fa-calendar-alt"></i><span>Reserva</span></a></li>
            <li class="has-sub {{ Route::is('admin.receptions') ? 'active' : '' }}"><a href="/admin/receptions"><i class="fa fa-bed-pulse"></i><span>Recepción</span></a>
            </li>
            <li class="has-sub"><a href="javascript:;">
                    <i class="fa fa-sign-out-alt"></i>
                    <span>Salidas</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-circle-dollar-to-slot"></i>
                    <span>Punto de Venta</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="form_elements.html">Vender Productos</a></li>
                    <li><a href="form_plugins.html">Catálogos de Productos</a></li>
                </ul>
            </li>
            <li class="has-sub">
                {{-- <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-list-check"></i>
                    <span>Inventario</span>
                </a> --}}
                <ul class="sub-menu">
                    <li><a href="javascript:;"> Kardex</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-cash-register"></i>
                    <span>Módulo de Caja</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="..\..\frontend\one-page-parallax\index.html" target="_blank">Apertura de Caja</a></li>
                    <li><a href="..\..\frontend\blog\index.html" target="_blank">Cierre de caja</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-shopping-basket"></i>
                    <span>Egresos</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="..\..\frontend\one-page-parallax\index.html" target="_blank">Nuevo egreso</a></li>
                    <li><a href="..\..\frontend\blog\index.html" target="_blank">Lista de egresos</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-cogs"></i>
                    <span>Configuración</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="..\..\frontend\one-page-parallax\index.html" target="_blank">Habitaciones</a></li>
                    <li><a href="..\..\frontend\blog\index.html" target="_blank">Categorías</a></li>
                    <li><a href="..\..\frontend\blog\index.html" target="_blank">Tarifas</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-chart-line"></i>
                    <span>Reportes</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="map_vector.html">Clientes</a></li>
                    <li><a href="map_google.html">Reporte Diario</a></li>
                    <li><a href="map_google.html">Reporte Recepcionista</a></li>
                    <li><a href="map_google.html">Reporte Estado de Habitación</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-database"></i>
                    <span>Administración</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="gallery_v2.html">Configuración</a></li>
                    <li><a href="gallery_v2.html">Respaldo de Datos</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="">
                    <i class="fa fa-circle-info"></i>
                    <span>Acerca De</span>
                </a>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                        class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
