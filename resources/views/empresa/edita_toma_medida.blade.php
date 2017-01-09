

<form class="" action="/actualiza_toma_medida" method="post" style="margin:50px;">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id_toma" value="{{$toma_medida->id}}">
      <div class="form-group" style="float:left;margin-right:10px;">
      <label  for="seccion">Area o Seccion</label><input id="seccion" name="seccion" style="width:150px;"type="text" class="form-control" value="{{$toma_medida->seccion_empresa}}" required>
      </div>
      <br>

    <div class="form-group" style="float:left;margin-right:10px;">
    <label  for="seccion">Codigo Acceso Empleados</label>
    <input id="codigo" name="codigo"  style="width:250px;"type="text" class="form-control" data-toggle="tooltip" value="{{$toma_medida->codigo_acceso}}" data-placement="bottom" title="Agregue aca un codigo de acceso para sus empleados" required>
    </div>

    <br>
          <!--  <div class="form-group" style="float:left;margin-right:10px;">
              <label>Fecha de Cierre o Termino</label>
                <div class='input-group date' id='fecha_cierre_cont' style="width:200px;">
                    <input type='text' class="form-control"  id="fecha_cierre" name="fecha_cierre"  value="{{$toma_medida->fecha_cierre}}" required/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#fecha_cierre_cont').datetimepicker({
                          format: 'YYYY-MM-DD HH:mm:ss',
                          locale: 'es-CL'
                        });
                    });
                </script>
            </div>-->
<br>
  <div class="form-group" style="float:left;margin-right:10px;margin-top:15px;">
    <input   type="submit" class="btn btn-success linea_form" value="Editar Toma Medidas" />
  </div>



</form>
