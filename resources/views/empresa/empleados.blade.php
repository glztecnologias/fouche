<?php $seccion = 'empresa'; ?>
<?php $pagina = 'empleados'; ?>
@extends('dashboard')
@section('title','Empresa - Empleados')
@section('content')

<span class="label label-success titulo-sec">Gestion de Empleados</span><br>

<a  class="btn btn-link" role="button" data-toggle="collapse" href="#ayuda" aria-expanded="false" aria-controls="ayuda"  title="Clic para ver ayuda..." >
  ¿Que puedo hacer aqui?
</a>
<div class="collapse" id="ayuda">
  <div class="well">
  <span class="label label-primary" style="font-size:15px;font-weight:bold;">"Agregar", "Editar" y "Eliminar" empleados de mi empresa</span><br><br>
  <p>Puedes agregar todos los empleados de tu empresa, <a href="/nuevo_empleado" class="modalx">uno por uno</a> o de <a href="/sube_multiple" class="modalx3">forma multiple</a>, editarlos con el boton
    <a class="btn btn-primary btn-xs "><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></a> y eliminarlos con el boton <a class="btn btn-danger btn-xs">
    <i class="fa fa-trash" aria-hidden="true"></i></a> (siempre y cuando no esten en una toma de medidas y/o pedido en curso)
  </p>
  <hr>
  <span class="label label-primary" style="font-size:15px;font-weight:bold;">"Buscar" y "Ordenar" la lista de empleados</span><br><br>
  <p>En la tabla de empleados a continuacion se encuentran funciones para "Buscar" un empleado por cualquier palabra relacionada que este dentro de su informacion Ej: Rut. <br></p>
  <p>Asi tambien se puede "Ordenar" la tabla segun se requiera por un campo especifico , solo haciendo clic en el encabezado de este. Ej: para ordenar por nombre, Haz clic en el encabezado de la tabla, campo "Nombre".</p>
  <hr>
  </div>
</div>

<a href="/nuevo_empleado" class="btn btn-success modalx" style="float:right;font-weight:bold;margin-left:10px;" title="Crear Nuevo"> <i class="fa fa-user" aria-hidden="true"></i> <i class="fa fa-plus-circle" aria-hidden="true"></i></a>

<a href="/sube_multiple" class="btn btn-primary modalx3" style="float:right;font-weight:bold; " title="Creacion Multiple">Multiple <i class="fa fa-users" aria-hidden="true"></i>
  <i class="fa fa-plus-circle" aria-hidden="true"></i>
</a>
<br>
<br>
  <table class="table table-condensed data-table">
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




@include('layouts.footer')
@endsection
