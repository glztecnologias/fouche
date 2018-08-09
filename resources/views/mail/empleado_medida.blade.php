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
    <p> Con fecha : {{ $fecha }}, hemos registrado tus datos de medidas en la plataforma de FOUCHE.</p>
    <br>
    <p>Muchas Gracias!</p>
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
