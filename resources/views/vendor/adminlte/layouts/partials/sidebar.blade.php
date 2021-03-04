<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../1.jpg" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <li class="treeview">
            <a href="#"><i class="fa fa-list"></i> <span>{{ trans('CATALOGOS') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('paquete') }}"><i class='fa fa-calendar-plus-o'></i> <span>paquete</span></a></li>  
            <li class="active"><a href="{{ url('empleado') }}"><i class='fa fa-user'></i> <span>Empleado</span></a></li>
            <li class="active"><a href="{{ url('paciente') }}"><i class='fa fa-user'></i> <span>Paciente</span></a></li>
            <li class="active"><a href="{{ url('servicio') }}"><i class='fa fa-medkit'></i> <span>Servicio</span></a></li>
            <li class="active"><a href="{{ url('doctor') }}"><i class='fa fa-user-md'></i> <span>Doctor</span></a></li>
            <li class="active"><a href="{{ url('especialidad') }}"><i class='fa fa-stethoscope'></i> <span>Especialidad</span></a></li>
            <li class="active"><a href="{{ url('area') }}"><i class='fa fa-home'></i> <span>Area</span></a></li>
            <li class="active"><a href="{{ url('estatus') }}"><i class='fa fa-check-square-o'></i> <span>Estatus</span></a></li>
            <li class="active"><a href="{{ url('hospital') }}"><i class='fa fa-hospital-o'></i> <span>Hospital</span></a></li>
            <li class="active"><a href="{{ url('piso') }}"><i class='fa fa-building'></i> <span>Piso</span></a></li>
            <li class="active"><a href="{{ url('cuarto') }}"><i class='fa fa-home'></i> <span>Cuarto</span></a></li>
            <li class="active"><a href="{{ url('pabellon') }}"><i class='fa fa-bed'></i> <span>Pabellon</span></a></li>
            
        </ul>
    </li>
            

     <li class="treeview">
            <a href="#"><i class="fa fa-list"></i> <span>{{ trans('REPORTE') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">

              <li class="active"><a href="{{ url('grafica') }}"><i class='fa fa-pie-chart'></i> <span>Grafica Cuartos</span></a></li>
              <li class="active"><a href="{{ url('asignacioncuarto') }}"><i class='fa fa-search-minus'></i> <span>Asignacion Cuarto</span></a></li>
              <li class="active"><a href="{{ url('horarioronda') }}"><i class='fa fa-calendar-plus-o'></i> <span>Horario Empleados</span></a></li>  
                  
              <li class="active"><a href="{{ url('Suscripcion') }}"><i class='fa fa-bed'></i> <span>Suscripciones</span></a></li>

            
    
       </ul>
    </li>
            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
