<?php $seccion = 'admin'; ?>
<?php $pagina = 'cuenta'; ?>
@extends('dashboard')
@section('title','Administracion - Cuenta')
@section('content')
<h4><span class="label label-primary">Mi Cuenta</span></h4>
<hr>
<p>Nombre : {{ $user->nombre}}</p>
<form class="form-inline" method="post" action="/admin/actualiza_cuenta">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group linea_form">
      <label for="exampleInputName2">Direccion</label>
      <input type="text" name="direccion_sucursal" class="form-control" id="exampleInputName2" value="{{ $user->direccion_sucursal}}">
    </div>
<br>
    <div class="form-group linea_form">
      <label for="exampleInputEmail2">Telefono</label>
      <input type="text" name="telefono" class="form-control" id="exampleInputEmail2" value="{{ $user->telefono}}">
    </div>
    <br>

<br>
<button type="submit" class="btn btn-success linea_form">Actualizar Datos <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
</form>
@include('layouts.footer')
@endsection
