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
    <p>Para solicitar composturas, sigue el o los siguientes enlaces (Segun fecha que te tomaste las medidas):</p>
    @foreach($medidas as $medida)

          <a href="http://intra.fouche.cl/sol_comp/{{$medida->id}}">Compostura para mi toma de medida del (Fecha):  <?php $fecha= strtotime($medida->created_at); echo date("d/m/Y ", $fecha);?></a><br>


    @endforeach
    <p>Muchas gracias por participar del proceso.</p>
    <br>
    <p>Atte.</p>
    Fouche Uniformes.
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
