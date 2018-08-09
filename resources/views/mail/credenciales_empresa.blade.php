<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<body>
<header style="background-color:black;">
	<div id="header" style="padding: 30px;" >
  <a href="http://intra.fouche.cl">
    <img src="http://intra.fouche.cl/assets/img/logofooter2.png" width="359" height="55" alt="Fouche Medidas" class="head_logo"></a>
</div>
</header>
<!--contenedor-->
<div id="contenedor">
<hr>

    <div id="contenido"  class="clearfix fondoHome" color="black">
    <p>Hola {{ $nombre }} !!</p>
    <p>Bienvenido a la plataforma <strong><a href="http://intra.fouche.cl/">Intra.fouche.cl</a></strong>, donde podrás gestionar la toma de medidas de tus empleados,
    pedidos a fouche, entre otros.</p>
    <br>
    Tus datos de acceso son:
    <br>
    Usuario o email :  <strong>{{$email}}</strong><br>
    Password: <strong>{{$password}}</strong>
    <br>
    <br>
    <p>Atte.</p>
    <p>Fouche</p>
    </div>

</div>
<hr>
<footer style="background-color:black;" >
<div id="footer" style="padding: 30px;">
  <p class="pieDerechos">Fouche.cl Todos los derechos de contenido reservados</p>

  <!--END-->
</div>

</footer>
</body>
</html>
