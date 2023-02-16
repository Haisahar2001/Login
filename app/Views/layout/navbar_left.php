<?php

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="public/dist/img/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Administrador</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="app/index" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-house-chimney"></i>
                        <p>
                            Inicio
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class='nav-link'>
                        <i class="nav-icon fas fa-solid fa-school"></i>
                        <p>
                            Escuelas
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="escuela/Registro" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar Escuela</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="escuela/consulta" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar Escuela</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class='nav-link'>
                        <i class="nav-icon fas fa-solid fa-book-open-reader"></i>
                        <p>
                            Modulo Educativo
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="educativo/Registro" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar Modulo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="educativo/consulta" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar Modulo</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-chalkboard-user"></i>
                        <p>
                            Docente
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="docente/registro" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar Docente</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="docente/consulta" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar Docente</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-regular fa-id-card"></i>
                        <p>
                            Estudiante
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="estudiante/registro" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar Estudiante</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="estudiante/consulta" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar Estudiante</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-people-roof"></i>
                        <p>
                            Grupo de Asignación
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="grupoasignacion/registro" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar Grupo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="grupoasignacion/consulta" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar Grupos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-money-check-dollar"></i>
                        <p>
                            Pagos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pago/registro" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar Pago</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pago/consulta" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar Pagos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-file-pen"></i>
                        <p>
                            Evaluaciones
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="evaluacion/registro" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar Evaluaciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar Evaluaciones</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-regular fa-file-lines"></i>
                        <p>
                            Calificaciones
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="app/calificaciones" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar Calificación</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar Calificaciones</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-user"></i>
                        <p>
                       Seguridad
                              <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-user"></i>
                        <p>
                            Usuario
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="user/registeruser" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar Usuario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="user/consultauser" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar Usuarios</p>
                            </a>
                        </li>
                    </ul>
                </li>
              
            
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-user-check"></i>
                        <p>
                            Roles
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#r" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrar rol</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#r" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar rol</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            bitacora
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="bitacora/consulta" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>consultar Bitacora</p>
                            </a>
                        </li>

                    </ul>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="reporte/index" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-paste"></i>
                        <p>
                            Reportes
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
               
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-book-bookmark"></i>
                        <p>
                            Ayuda
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-header">Calendario</li>
                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendario
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="user/logout" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-right-to-bracket"></i>
                        <p>
                            Cerrar sesion
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>