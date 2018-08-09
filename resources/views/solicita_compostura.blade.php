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
    <p>Hola !!</p>
    <p>Para solicitar composturas, sigue el o los siguientes enlaces (Segun fecha que te tomaste las medidas):</p>

          <form class="form-horizontal" method="post" action="http://intra.fouche.cl/crea_compostura_mail">
            <input type="hidden" name="medida" value="{{ $medida->id }}">
			<input type="hidden" name="usuario" value="{{ $medida->users_id }}">

			<div class="form-group">
              <label for="prenda" class="col-sm-2 control-label">Prenda</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="prenda" name="prenda" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="color" class="col-sm-2 control-label">Color</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="color" name="color" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="error" class="col-sm-2 control-label">Error Prenda</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="error" name="error" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="compostura_solicitada" class="col-sm-2 control-label">Arreglo Solicitado</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="compostura_solicitada" name="compostura_solicitada" placeholder="">
              </div>
            </div>
						<br>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Enviar Compostura</button>
              </div>
            </div>
          </form>
          <hr>
          <br>


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
