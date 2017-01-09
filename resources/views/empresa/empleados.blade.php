<?php $seccion = 'empresa'; ?>
<?php $pagina = 'empleados'; ?>
@extends('dashboard')
@section('title','Empresa - Empleados')
@section('content')

<span class="label label-success titulo-sec">Empleados</span><br>

<a href="/nuevo_empleado" class="btn btn-success modalx" style="float:right;font-weight:bold;margin-left:10px;" title="Crear Nuevo"> <i class="fa fa-user" aria-hidden="true"></i> <i class="fa fa-plus-circle" aria-hidden="true"></i></a>

<a href="/sube_multiple" class="btn btn-primary modalx3" style="float:right;font-weight:bold; " title="Creacion Multiple">Multiple <i class="fa fa-users" aria-hidden="true"></i>
  <i class="fa fa-plus-circle" aria-hidden="true"></i>
</a>
<br>
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
           <th>Accion</th>
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
          <th>Accion</th>
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
           <td>
             <a class="btn btn-primary btn-xs modalx" href="/edita_empleado/{{$empleado->id}}">
                <i class="fa fa-pencil-square-o" aria-hidden="true" ></i>
             </a>
             <a class="btn btn-danger btn-xs" href="javascript:elimina_recurso({{$empleado->id}},'/elimina_empleado')" title="Elimina Empleado">
               <i class="fa fa-trash" aria-hidden="true"></i>
             </a>
           </td>
        </tr>
        <?php $i++;?>
        @empty
        <p>Sin registros...</p>
        @endforelse
     </tbody>
  </table>
  <hr>
<!--           LEYENDAS            -->
  <p style="float:right;">Leyenda:
      <a class="btn btn-danger btn-xs">
      <i class="fa fa-trash" aria-hidden="true"></i></a> Eliminar
      <a class="btn btn-primary btn-xs ">
      <i class="fa fa-pencil-square-o" aria-hidden="true" ></i></a> Editar
  </p>
<!--          ##########           -->
<br>
<hr>

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
