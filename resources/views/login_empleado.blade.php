<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Fouche - Acceso Empresas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="/assets/css/main.css" rel="stylesheet" id="bootstrap-css">

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="/libs/rut/jquery.rut.js"></script>
    <script type="text/javascript">
/**
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height());
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
        **/
        $(function() {

      $('#login-form-link').click(function(e) {
  		$("#login-form").delay(100).fadeIn(100);
   		$("#register-form").fadeOut(100);
  		$('#register-form-link').removeClass('active');
  		$(this).addClass('active');
  		e.preventDefault();
  	});
  	$('#register-form-link').click(function(e) {
  		$("#register-form").delay(100).fadeIn(100);
   		$("#login-form").fadeOut(100);
  		$('#login-form-link').removeClass('active');
  		$(this).addClass('active');
  		e.preventDefault();
  	});



  });
  function checkRut(rut) {
      // Despejar Puntos
      var valor = rut.value.replace('.','');
      // Despejar Guión
      valor = valor.replace('-','');

      // Aislar Cuerpo y Dígito Verificador
      cuerpo = valor.slice(0,-1);
      dv = valor.slice(-1).toUpperCase();

      // Formatear RUN
      rut.value = cuerpo + '-'+ dv

      // Si no cumple con el mínimo ej. (n.nnn.nnn)
      if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}

      // Calcular Dígito Verificador
      suma = 0;
      multiplo = 2;

      // Para cada dígito del Cuerpo
      for(i=1;i<=cuerpo.length;i++) {

          // Obtener su Producto con el Múltiplo Correspondiente
          index = multiplo * valor.charAt(cuerpo.length - i);

          // Sumar al Contador General
          suma = suma + index;

          // Consolidar Múltiplo dentro del rango [2,7]
          if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }

      }

      // Calcular Dígito Verificador en base al Módulo 11
      dvEsperado = 11 - (suma % 11);

      // Casos Especiales (0 y K)
      dv = (dv == 'K')?10:dv;
      dv = (dv == 0)?11:dv;

      // Validar que el Cuerpo coincide con su Dígito Verificador
      if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }

      // Si todo sale bien, eliminar errores (decretar que es válido)
      rut.setCustomValidity('');
  }
    </script>
    <style media="screen">
    body {
  padding-top: 90px;
}
.panel-login {
border-color: #ccc;
-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
color: #00415d;
background-color: #fff;
border-color: #fff;
text-align:center;
}
.panel-login>.panel-heading a{
text-decoration: none;
color: #666;
font-weight: bold;
font-size: 15px;
-webkit-transition: all 0.1s linear;
-moz-transition: all 0.1s linear;
transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
color: #029f5b;
font-size: 18px;
}
.panel-login>.panel-heading hr{
margin-top: 10px;
margin-bottom: 0px;
clear: both;
border: 0;
height: 1px;
background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
height: 45px;
border: 1px solid #ddd;
font-size: 16px;
-webkit-transition: all 0.1s linear;
-moz-transition: all 0.1s linear;
transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
outline:none;
-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none;
border-color: #ccc;
}
.btn-login {
background-color: #59B2E0;
outline: none;
color: #fff;
font-size: 14px;
height: auto;
font-weight: normal;
padding: 14px 0;
text-transform: uppercase;
border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
color: #fff;
background-color: #53A3CD;
border-color: #53A3CD;
}
.forgot-password {
text-decoration: underline;
color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
text-decoration: underline;
color: #666;
}

.btn-register {
background-color: #1CB94E;
outline: none;
color: #fff;
font-size: 14px;
height: auto;
font-weight: normal;
padding: 14px 0;
text-transform: uppercase;
border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
color: #fff;
background-color: #1CA347;
border-color: #1CA347;
}
    </style>
</head>
<body>


 <div class="container">
    	<div class="row">

			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">

					<div class="panel-heading">
            <hr>
            <img src="/assets/img/logo1.png" alt="" height="80" style="margin:20px;" />
            <hr>

					</div>
					<div class="panel-body">


            <div>
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" ><a  href="#login_empresas" aria-controls="home" role="tab" data-toggle="tab">Empresas</a></li>
                <li role="presentation" class="active"><a href="#login_empleados" aria-controls="profile" role="tab" data-toggle="tab">Empleados</a></li>
                <li role="presentation"><a href="#composturas" aria-controls="messages" role="tab" data-toggle="tab">Solicitud Composturas</a></li>
              </ul>

              <div class="tab-content">
                <div role="tabpanel" class="tab-pane " id="login_empresas">
                  <br>
                  <form id="login-form" role="form" method="POST" action="{{ url('/auth/login') }}"  style="display: block;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <input type="text" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Entrar">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane active" id="login_empleados">
                  <br>
                  <form  action="/toma_de_medida" method="post" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <input type="text" name="rut" id="rut" tabindex="1" class="form-control" value="" required  placeholder="Ingrese RUT">
                    </div>
                    <div class="form-group">
                      <input type="text" name="codigo" id="codigo" tabindex="1" class="form-control" placeholder="Codigo" value="" required>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Entrar">
                        </div>

                      </div>
                    </div>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="composturas">
                  <br>
                  <div class="row" style="margin:20px;">
                    <p>Para solicitar una compostura/correccion de prenda, ingresa tu Email, y te enviaremos las instrucciones a la brevedad.</p>
                    <form id="login-form" role="form" method="POST" action="/solicitud_compostura"  style="display: block;">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <input type="text" name="email" id="username" tabindex="1" class="form-control" placeholder="email@email.com" value="">
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                            <input style="font-weight:bold;" type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-register" value="Enviar">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                @if(session('mensaje'))



                  @if(session('mensaje')=="El usuario y/o Codigo no existen!")
                  <div class="alert alert-danger alert-dismissible text-center" role="alert">
                  @endif
                  @if(session('mensaje')=="Al parecer ya enviaste tus medidas!")
                  <div class="alert alert-danger alert-dismissible text-center" role="alert">
                  @endif
                  @if(session('mensaje')=="El usuario y/o Codigo no coinciden!")
                  <div class="alert alert-danger alert-dismissible text-center" role="alert">
                  @endif
                  @if(session('mensaje')=="Registro de Datos Exitoso!")
                  <div class="alert alert-success alert-dismissible text-center" role="alert">
                  @endif
                  @if(session('mensaje')=="Los datos e instrucciones fueron enviados a tu casilla de correo!")
                  <div class="alert alert-success alert-dismissible text-center" role="alert">
                  @endif
                  @if(session('mensaje')=="Correo ingresado no existe!")
                  <div class="alert alert-danger alert-dismissible text-center" role="alert">
                  @endif
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  <strong>{{session('mensaje')}}</strong>
                </div>

                @endif
              </div>
            </div>



					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
