<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav" style="font-weight:bold;">
        <li <?php if($pagina == 'index'){echo 'class="active"';} ?>>
            <a href="/empresa">Inicio <i class="fa fa-home" aria-hidden="true"></i>  </a>
        </li>
        <li <?php if($pagina == 'empleados'){echo 'class="active"';} ?>>
            <a href="/empresa/empleados">1° - 2° Empleados <i class="fa fa-users" aria-hidden="true"></i> </a>
        </li>
        <li <?php if($pagina == 'pedidos_medidas'){echo 'class="active"';} ?>>
            <a href="/empresa/pedidos_medidas">3° Pedidos & Medidas <i class="fa fa-hand-o-up" aria-hidden="true"></i> </a>
        </li>
        <li <?php if($pagina == 'composturas'){echo 'class="active"';} ?>>
            <a href="/empresa/composturas">4° Composturas  <i class="fa fa-scissors" aria-hidden="true"></i></a>
        </li>
        <li <?php if($pagina == 'cuenta'){echo 'class="active"';} ?>>
            <a href="/empresa/cuenta">Cuenta <i class="fa fa-user" aria-hidden="true"></i> </a>
        </li>
    </ul>
</div>
