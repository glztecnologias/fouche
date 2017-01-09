<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li <?php if($pagina == 'index'){echo 'class="active"';} ?>>
            <a href="/admin"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
        </li>
        <li <?php if($pagina == 'empresas'){echo 'class="active"';} ?>>
            <a href="/admin/empresas"><i class="fa fa-university" aria-hidden="true"></i> Empresas</a>
        </li>
        <li <?php if($pagina == 'pedidos'){echo 'class="active"';} ?>>
            <a href="/admin/pedidos"><i class="fa fa-hand-o-up" aria-hidden="true"></i> Pedidos</a>
        </li>
        <li <?php if($pagina == 'composturas'){echo 'class="active"';} ?>>
            <a href="/admin/composturas"><i class="fa fa-magic" aria-hidden="true"></i> Composturas</a>
        </li>
        <li <?php if($pagina == 'cuenta'){echo 'class="active"';} ?>>
            <a href="/admin/cuenta"><i class="fa fa-user" aria-hidden="true"></i> Cuenta</a>
        </li>
    </ul>
</div>
