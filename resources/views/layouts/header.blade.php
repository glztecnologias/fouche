
<ul class="nav navbar-right top-nav">
    <li class="">

          @if(isset($user))
          <a href="{{ url('/admin/cuenta') }}" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user fa-2" style="color:white;padding-right: 5px;font-size: 16px;"></i>
           <span style="color:white;font-weight: bold;">{{ $user->nombre }}</span>
           </a>
           @endif


           @if(isset($usuario))
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <i class="fa fa-user fa-2" style="color:white;padding-right: 5px;font-size: 16px;"></i>
            <span  style="color:white;font-weight: bold;">{{ $usuario->nombre }} :: <u>{{$usuario->rut}}</u></span>


             </a>
            @endif
        </li>
        <li>
            <a href="{{ url('/auth/logout') }}" data-toggle="tooltip" data-placement="bottom" title="Cerrar Sesion">
              <i class="fa fa-fw fa-power-off" style="color:red;padding-right: 5px;font-size: 16px;"></i>
            <span style="color:white;font-weight: bold;">Salir</span>
            </a>
        </li>


</ul>
