<?php $seccion = 'empresa'; ?>
<?php $pagina = 'cuenta'; ?>
@extends('dashboard')
@section('title','Empresa - Cuenta')
@section('content')
<span class="label label-success titulo-sec">Mi Cuenta</span>
<br><br>
<p>Nombre : {{ $user->nombre}}</p>
<p>RUT : {{ $user->rut}}</p>
<p>Email : {{ $user->email}}</p>
<p>Fecha Ultima Actualizacion : {{ $empresa->updated_at}}</p>

<form class="form-inline" action="/actualiza_cuenta" method="post">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group linea_form">
      <label for="exampleInputName2">Direccion</label>
      <input type="text" class="form-control" id="exampleInputName2" name="direccion" value="{{$empresa->direccion}}">
    </div>
<br>
    <div class="form-group linea_form">
      <label for="exampleInputEmail2">Telefono</label>
      <input type="text" class="form-control" id="exampleInputEmail2" name="telefono" value="{{$empresa->telefono}}">
    </div>
<br>
    <div class="form-group linea_form">
      <label for="exampleInputEmail2">Nombre Encargado</label>
      <input type="text" class="form-control" id="exampleInputEmail2" name="n_encargado" value="{{$empresa->n_encargado}}">
    </div>
<br>
    <div class="form-group linea_form">
      <label for="exampleInputEmail2">Telefono Encargado</label>
      <input type="text" class="form-control" id="exampleInputEmail2" name="t_encargado" value="{{$empresa->t_encargado}}">
    </div>
<br>
<button type="submit" class="btn btn-primary linea_form">Actualizar Datos <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
<!--<a class="btn btn-primary linea_form">Cambiar Contraseña <i class="fa fa-key" aria-hidden="true"></i></a>-->
</form>
@include('layouts.footer')
@endsection
