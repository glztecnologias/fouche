<?php $seccion = 'admin'; ?>
<?php $pagina = 'empresas'; ?>
@extends('dashboard')
@section('title','Administracion - Empresas')
@section('content')
<h4><span class="label label-primary">Empresas</span></h4>

<a href="/nueva_empresa" class="btn btn-success modalx" style="float:right;font-weight:bold;" title="Crear nueva empresa" data-toggle="tooltip" data-placement="top">
  Crear <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
<br>
<br>

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
          <a class="btn btn-danger btn-xs" href="/admin/empresas/{{$u_empresa->id}}/desactiva" title="Desactivar Empresa" style="float: right;" data-toggle="tooltip" data-placement="top">
            <i class="fa fa-ban" aria-hidden="true"></i>
          </a>
          @endif
          @if($u_empresa->estado=="inactivo")
          <a class="btn btn-success btn-xs" href="/admin/empresas/{{$u_empresa->id}}/activa" title="Activar Empresa" style="float: right;" data-toggle="tooltip" data-placement="top">
            <i class="fa fa-check" aria-hidden="true"></i>
          </a>
          @endif

         </td>
        <td>
          {{$u_empresa->empresa->users->count()-1}}
        </td>
        <td>
          &nbsp;&nbsp;
          <a class="btn btn-danger btn-xs" href="javascript:elimina_recurso({{$u_empresa->empresa->id}},'/elimina_empresa')" title="Eliminar Empresa" style="float: right;margin-left:5px;" data-toggle="tooltip" data-placement="top">
            <i class="fa fa-trash" aria-hidden="true"></i>
          </a>

          <a class="btn btn-primary btn-xs modalx" href="/edita_empresa/{{$u_empresa->empresa->id}}" title="Ver/Editar Empresa" style="float: right;" data-toggle="tooltip" data-placement="top">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a>

          <a class="btn btn-warning btn-xs" href="javascript:envia_credenciales_empresa({{$u_empresa->empresa->id}})" title="Enviar Credenciales a Empresa (email)" style="float: right;margin-right: 5px;" data-toggle="tooltip" data-placement="top">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
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
