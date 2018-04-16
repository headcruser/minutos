<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="img/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#">
                    <i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVEGACION PRINCIPAL</li>
            <li>
                <a href="{{ route('reuniones.index') }}">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Reuniones</span>
                </a>
            </li>
             <li class="header">ADMINISTRACION</li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i>
                    <span>Sistema</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('usuarios.index') }}">
                           <i class="fa fa-user" aria-hidden="true"></i> Usuarios</a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>