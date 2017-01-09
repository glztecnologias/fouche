<?php $seccion = 'admin'; ?>
<?php $pagina = 'cuenta'; ?>
@extends('dashboard')
@section('title','Administracion - Cuenta')
@section('content')
<h2>Mi Cuenta</h2>
<hr>
<p>Nombre : {{ $user->nombre}}</p>
<p>RUT : {{ $user->rut}}</p>
<form class="form-inline">
    <div class="form-group linea_form">
      <label for="exampleInputName2">Direccion</label>
      <input type="text" class="form-control" id="exampleInputName2" value="Vicuña Mackena #12312">
    </div>
<br>
    <div class="form-group linea_form">
      <label for="exampleInputEmail2">Telefono</label>
      <input type="email" class="form-control" id="exampleInputEmail2" value="+569462165456">
    </div>
<br>
    <div class="form-group linea_form">
      <label for="exampleInputEmail2">Nombre Encargado</label>
      <input type="email" class="form-control" id="exampleInputEmail2" value="Juan Perez">
    </div>
<br>
    <div class="form-group linea_form">
      <label for="exampleInputEmail2">Telefono Encargado</label>
      <input type="email" class="form-control" id="exampleInputEmail2" value="+569546546546">
    </div>
<br>
<button type="submit" class="btn btn-success linea_form">Actualizar Datos <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
<button type="submit" class="btn btn-primary linea_form">Cambiar Contraseña <i class="fa fa-key" aria-hidden="true"></i></button>
</form>
@include('layouts.footer')
@endsection
