<?php $seccion = 'empresa'; ?>
<?php $pagina = 'seleccion_toma'; ?>
@extends('dashboard')
@section('title','Empresa - Seleccion Toma Medidas')
@section('content')

<span class="label label-success titulo-sec">Seleccion Empleados</span><br>


<a  class="btn btn-link" role="button" data-toggle="collapse" href="#ayuda" aria-expanded="false" aria-controls="ayuda"  title="Clic para ver ayuda..." >
  ¿Que puedo o debo hacer aqui?
</a>
<div class="collapse" id="ayuda">
  <div class="well">
  <span class="label label-primary" style="font-size:15px;font-weight:bold;">1.- "Buscar" y "Seleccionar" empleados de mi empresa</span><br><br>
  <p>Puedes buscar y seleccionar a los empleados que deseas que sean parte de una toma de medidas, para enviar como PEDIDO a FOUCHE, es muy importante que estos deben ser de un pedido del "Mismo Uniforme" y de la misma "Orden de Compra", asociada.
    . Para seleccionar a los usuarios solo debes hacer clic en la FILA que corresponde y esta quedara sombreada (puedes verificar la seleccion en la esquina inferior izquierda de la tabla).
  </p>
  <hr>
  <span class="label label-primary" style="font-size:15px;font-weight:bold;">2.- Crear toma de medida</span><br><br>
  <p>Luego de seleccionar a los empleados, debes ingresar el "Area o Seccion" a la que pertenecen o en caso negativo ingresa "s/n", Luego debes ingresar un "CODIGO" para que los empleados puedan acceder e ingresar sus medidas. EJ: EMPRESAX3300 </p>
  <hr>
  </div>
</div>

<br>
Para seleccionar haga "Clic" en la FILA deseada ( quedara sombreada ), tambien puedes usar los botones "Todo o Nada"
<br>

  <table class="table table-condensed data-table-sp display" id="tabla-empleados">
     <thead>
        <tr>
          <th style="display:none">ID</th>
          <th>#</th>
           <th>Nombre</th>
           <th>Rut</th>
           <th>Telefono</th>
           <th>Nombre Sucursal</th>
           <th>sexo</th>
        </tr>
     </thead>
     <tfoot>
       <tr>
         <th style="display:none">ID</th>
         <th>#</th>
          <th>Nombre</th>
          <th>Rut</th>
          <th>Telefono</th>
          <th>Nombre Sucursal</th>
          <th>sexo</th>
       </tr>
     </tfoot>
     <tbody>
       <?php $i=1;?>
       @forelse($empleados as $empleado)
        <tr>
          <td style="display:none;" class="id_empleado">{{$empleado->id}}</td>
          <td>{{$i}}</td>
           <td>{{$empleado->nombre}}</td>
           <td>{{ $empleado->rut}}</td>
           <td>{{ $empleado->telefono}}</td>
           <td>{{ ucfirst($empleado->nombre_sucursal) }}</td>
           <td>{{ $empleado->sexo == 'm' ? 'Masculino': 'Femenino' }}</td>
        </tr>
        <?php $i++;?>
        @empty
        <p>Sin registros...</p>
        @endforelse
     </tbody>
  </table>

<h4><span class="label label-primary">Toma de Medidas</span></h4>

<form class="" action="index.html" method="post">

      <div class="form-group" style="float:left;margin-right:10px;">
      <label  for="seccion">Area o Seccion</label>
      <input id="seccion" style="width:150px;"type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Agregue la seccion de su empresa que corresponde la Toma de Medidas.">
      </div>

      <div class="form-group" style="float:left;margin-right:10px;">
      <label  for="seccion">Codigo Acceso Empleados</label>
      <input id="codigo" style="width:250px;"type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Agregue aca un codigo de acceso para sus empleados">
      </div>
<!--
      <div class="form-group" style="float:left;margin-right:10px;">
        <label  for="seccion">Codigo Acceso Empleados</label>
      <div class="input-group" style="width:200px;">
       <input id="codigo" class="form-control" aria-label="Text input with multiple buttons" >
       <div class="input-group-btn"> <a href ="javascript:generar_codigo();" class="btn btn-primary">Generar</a> </div>
    </div>
  </div>-->

          <!--  <div class="form-group" style="float:left;margin-right:10px;">
              <label>Fecha de Cierre o Termino</label>
                <div class='input-group date' id='fecha_cierre_cont' style="width:200px;">
                    <input type='text' class="form-control"  id="fecha_cierre" data-toggle="tooltip" data-placement="bottom" title="Clic en icono para seleccionar fecha" />
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

  <div class="form-group" style="float:left;margin-right:10px;margin-top:15px;">
    <a   class="btn btn-success linea_form" href="javascript:crea_toma_medida();">Crear Toma Medidas<i class="fa fa-plus-circle" aria-hidden="true"></i></a>
  </div>




</form>


@include('layouts.footer')
@endsection
