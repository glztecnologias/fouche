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
    <p>Bienvenido a la plataforma <strong><a href="http://intra.fouche.cl/">Intra.fouche.cl</a></strong></p>
    <p>La empresa {{ $empresa }} , te ha ingresado al sistema para que registres tus medidas.</p>
    <p>Para ello debes hacer lo siguiente:</p>
    <ul>
      <li>Ingresa a <a href="http://intra.fouche.cl/">Intra.fouche.cl</a></li>
      <li>Luego debes hacer "Clic" en el apartado del login "Acceso Empleados"</li>
      <li>Ingresa tu RUT: {{$rut}}</li>
      <li>Ingresa el CODIGO : {{ $codigo }}</li>
      <li>y registra tus medidas!</li>
    </ul>
    <br>
    <p>Muchas gracias por participar del proceso.</p>
    <br>
    <p>Atte.</p>
    {{ $empresa }} y Fouche Uniformes.
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
