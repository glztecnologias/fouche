
<ul class="nav navbar-right top-nav">
    <li class="">
        <a href="{{ url('/admin/cuenta') }}" class="dropdown-toggle" data-toggle="dropdown">

          <i class="fa fa-user" style="color:blue;"></i> 
          @if(isset($user))
           {{ $user->nombre }}
           @else

           @endif
           </a>
        </li>
        <li>
            <a href="{{ url('/auth/logout') }}">
              <i class="fa fa-fw fa-power-off" style="color:red;"></i> Salir</a>
        </li>


</ul>
