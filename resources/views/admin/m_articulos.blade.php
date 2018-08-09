<?php $seccion = 'admin'; ?>
<?php $pagina = 'm_articulos'; ?>
@extends('dashboard')
@section('title','Administracion - Mantenedor Articulos')
@section('content')
<h4><span class="label label-primary">Mantenedor Articulos</span></h4>
<a href="/nuevo_articulo" class="btn btn-success modalx" style="float:right;font-weight:bold;" title="Crear Nuevo Articulo" data-toggle="tooltip" data-placement="top">
  Crear <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
<br>
<br>
<table class="table table-condensed data-table">
   <thead>
      <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Codigo</th>
          <th>Zona (Sup/Inf)</th>
          <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
<?php $i = 1; ?>
@forelse( $articulos as $prenda )
  <tr>
         <th scope="row">{{$i}}</th>
         <td>{{$prenda->nombre}}</td>
         <td>{{$prenda->codigo}}</td>
         <td>{{$prenda->sup_inf}}</td>
         <td>
           <a class="btn btn-primary btn-xs modalx" href="/edita_articulo/{{$prenda->id}}" title="Edita articulo" data-toggle="tooltip" data-placement="top">
             <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
           </a>
           <a class="btn btn-danger btn-xs" href="javascript:elimina_recurso({{$prenda->id}},'/elimina_articulo')" title="Elimina articulo" data-toggle="tooltip" data-placement="top">
             <i class="fa fa-trash" aria-hidden="true"></i>
           </a>
         </td>
      </tr>
    <?php $i++; ?>
    @empty
    sin registros
    @endforelse
   </tbody>
</table>
@include('layouts.footer')
@endsection
