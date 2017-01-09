<?php $seccion = 'admin'; ?>
<?php $pagina = 'empresas'; ?>
@extends('dashboard')
@section('title','Administracion - Empresas')
@section('content')
<h4><span class="label label-primary">Empresas</span></h4>

<a href="/nueva_empresa" class="btn btn-success modalx" style="float:right;font-weight:bold;" title="Crear Nuevo">Crear <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
<br>
<br>
<!--<form class="form-inline" action="/admin/empresas/nueva" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group linea_form form-group-sm">
      <label for="exampleInputName2">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="exampleInputName2">
    </div>

    <div class="form-group linea_form form-group-sm">
      <label for="exampleInputEmail2">Rut Empresa</label>
      <input type="text" class="form-control" name="rut" id="exampleInputEmail2" placeholder="111.111.111-1">
    </div>

    <div class="form-group linea_form form-group-sm">
      <label for="exampleInputEmail2">Telefono</label>
      <input type="text" class="form-control" name="telefono" id="exampleInputEmail2">
    </div>

    <div class="form-group linea_form form-group-sm">
      <label for="exampleInputEmail2">Ciudad</label>
      <input type="text" class="form-control" name="ciudad" id="exampleInputEmail2">
    </div>

    <div class="form-group linea_form form-group-sm">
      <label for="exampleInputEmail2">Direccion</label>
      <input type="text" class="form-control" id="exampleInputEmail2" name="direccion">
    </div>

    <div class="form-group linea_form form-group-sm">
      <label for="exampleInputEmail2">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail2" name="email">
    </div>

    <div class="form-group linea_form form-group-sm">
      <label for="exampleInputEmail2">Password</label>
      <input type="password" class="form-control" id="exampleInputEmail2" name="password" placeholder="*****">
    </div>

<button type="submit" class="btn btn-success linea_form">Agregar Nuevo <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
</form>-->

<table class="table table-condensed data-table">
   <thead>
      <tr>
         <th>Nombre Empresa</th>
         <th>Email/Usuario</th>
         <th>Contraseña</th>
         <th>Fecha de Ingreso/Creacion</th>
         <th>Estado</th>
         <th>N° Empleados</th>
         <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
     @forelse($usuarios_empresas as $u_empresa)
     <tr>
        <td>{{$u_empresa->empresa->nombre}}</td>
        <td>{{$u_empresa->email}}</td>
        <td>{{$u_empresa->empresa->password}}</td>
        <td>{{$u_empresa->empresa->created_at}}</td>
        <td>
          {{$u_empresa->estado}}
          @if($u_empresa->estado=="activo")
          <a class="btn btn-danger btn-xs" href="/admin/empresas/{{$u_empresa->id}}/desactiva" title="Desactivar" style="float: right;">
            <i class="fa fa-ban" aria-hidden="true"></i>
          </a>
          @endif
          @if($u_empresa->estado=="inactivo")
          <a class="btn btn-success btn-xs" href="/admin/empresas/{{$u_empresa->id}}/activa" title="Activar" style="float: right;">
            <i class="fa fa-check" aria-hidden="true"></i>
          </a>
          @endif

         </td>
        <td>
          {{$u_empresa->empresa->users->count()-1}}
        </td>
        <td>
          &nbsp;&nbsp;
          <a class="btn btn-danger btn-xs" href="javascript:elimina_recurso({{$u_empresa->empresa->id}},'/elimina_empresa')" title="Eliminar Empresa" style="float: right;margin-left:5px;">
            <i class="fa fa-trash" aria-hidden="true"></i>
          </a>

          <a class="btn btn-primary btn-xs modalx" href="/edita_empresa/{{$u_empresa->empresa->id}}" title="Ver/Editar Empresa" style="float: right;" >
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a>


        </td>
     </tr>
     @empty
     <p>Sin registros Aun</p>
     @endforelse

   </tbody>
</table>

@include('layouts.footer')
@endsection
