

	<div class="container" style="margin: 25px;">
		<strong>Para subir multiples empleados debes descargar <a href="\planilla_vacia_fouche.xlsx" class="label label-success" style="font-size:15px;" ><i class="fa fa-download" aria-hidden="true"></i>
  esta planilla  <i class="fa fa-file-excel-o" aria-hidden="true"></i>
</a>, en la cual debes rellenar solo los campos que se solicitan</strong><br>
<br>

<ul>
	<li>El RUT debe estar completo, Ejemplo: <span class="label label-primary" style="font-size:15px;">16069022-4</span> OJO  sin puntos.</li>
	<li>El SEXO o GENERO debe ser solo una letra  <strong style="font-size:20px;">m</strong> (Masculino) y <strong style="font-size:20px;">f</strong> (Femenino)</li>
	<li>En el caso de que se repitan usuarios que ya estan registrados estos se actualizaran con la ultima informacion de la planilla. (<strong>el rut debe ser el mismo</strong>).</li>
</ul>
<br>
<strong>Luego de completarlo deben subirlo a continuacion. (Presionar boton examinar)</strong>
<br>
<br>
		<form  action="/importExcel" class="form-horizontal" method="post" enctype="multipart/form-data" style="width:300px;">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="file" name="import_file" />
			<br>
			<button class="btn btn-primary">Iniciar Subida</button>
		</form>

	</div>
