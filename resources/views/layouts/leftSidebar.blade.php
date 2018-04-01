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
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVEGACION PRINCIPAL</li>
            {{--  TABLES  --}}
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
                            <i class="fa fa-circle-o"></i> Usuarios</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i> Minutas</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('reuniones.index') }}">
                    <i class="fa fa-book"></i>
                    <span>Reuniones Disponibles</span>
                </a>
            </li>
            <li>
                <a href="{{ route('reuniones.index') }}">
                    <i class="fa fa-book"></i>
                    <span>Temas</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>