<?php $seccion = 'empleado'; ?>
@extends('dashboard')
@section('title','Toma_medidas')
@section('content')
<h3><span class="label label-success">Toma Medidas</span></h3>
</hr>


<style media="screen">
  .mini_input{
    width: 60px;
  }
  .division2{
    border-left: 1px dotted gray;
  }
  .division1{
    border-top: 1px dotted gray;
  }

</style>
<form action="clientes/gestion" method="post" class="form-horizontal">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row division1">

    <div class="col-xs-6 ">
      <h4><span class="label label-primary">Datos Basicos</span></h4>
      <p><label>Nombre :</label> Juan Perez </p>
      <p><label>Rut: </label> 16.069.022-4</p>
      <div class="form-group">
        <label for="peso" class="col-sm-2 control-label" >Peso</label>
        <div class="col-sm-10">
          <input type="text" id="peso" name="peso" class="form-control mini_input" placeholder="">
        </div>
      </div>

      <div class="form-group">
        <label for="estatura" class="col-sm-2 control-label" >Estatura</label>
        <div class="col-sm-10">
          <input type="text" id="estatura" name="estatura" class="form-control mini_input" placeholder="">
        </div>
      </div>

      <div class="form-group">
        <label for="observaciones" class="col-sm-2 control-label" >Observaciones</label>
        <div class="col-sm-10">
          <input type="text" id="observaciones" name="observaciones" class="form-control ">
        </div>
      </div>

    </div>
    <div class="col-xs-6 division2">
      <h4><span class="label label-primary">Sugerencia de Talla</span></h4>
      <div class="form-group ">
        <label for="chaqueta" class="col-sm-2 control-label" >Chaqueta</label>
        <div class="col-sm-10">
          <input type="text" id="chaqueta" name="chaqueta " class="form-control mini_input">
        </div>
      </div>

      <div class="form-group ">
        <label for="falda" class="col-sm-2 control-label" >Falda</label>
        <div class="col-sm-10">
          <input type="text" id="falda" name="falda " class="form-control mini_input">
        </div>
      </div>

      <div class="form-group ">
        <label for="blusa" class="col-sm-2 control-label" >Blusa</label>
        <div class="col-sm-10">
          <input type="text" id="blusa" name="blusa " class="form-control mini_input">
        </div>
      </div>

      <div class="form-group ">
        <label for="pantalon" class="col-sm-2 control-label" >Pantalon</label>
        <div class="col-sm-10">
          <input type="text" id="pantalon" name="pantalon " class="form-control mini_input">
        </div>
      </div>

      <div class="form-group ">
        <label for="polera" class="col-sm-2 control-label" >Polera</label>
        <div class="col-sm-10">
          <input type="text" id="polera" name="polera " class="form-control mini_input">
        </div>
      </div>

    </div>
</div>

<div class="row division1">

    <div class="col-xs-6 ">
      <h4><span class="label label-primary">Medidas</span></h4>

      <div class="form-group">
        <div class="col-md-4">
          <label><span class="label label-default">1</span>&nbsp;&nbsp;&nbsp; Ancho Espalda</label>
        </div>
        <div class="col-md-4">
          <input type="text" id="peso" name="peso" class="form-control mini_input" placeholder="">
        </div>
      </div>

      <div class="form-group">
<div class="col-md-4">
        <label><span class="label label-default"> 2 </span>&nbsp;&nbsp;&nbsp;Busto</label>
      </div>
        <div class="col-md-4">
          <input type="text" id="estatura" name="estatura" class="form-control mini_input" placeholder="">
        </div>
      </div>

      <div class="form-group">
<div class="col-md-4">
        <label><span class="label label-default"> 3 </span>&nbsp;&nbsp;&nbsp;Cintura</label>
      </div>
        <div class="col-md-4">
          <input type="text" id="estatura" name="estatura" class="form-control mini_input" placeholder="">
        </div>
      </div>

      <div class="form-group">
<div class="col-md-4">
        <label><span class="label label-default"> 4 </span>&nbsp;&nbsp;&nbsp;Cadera Baja</label>
      </div>
        <div class="col-md-4">
          <input type="text" id="estatura" name="estatura" class="form-control mini_input" placeholder="">
        </div>
      </div>

      <div class="form-group">
<div class="col-md-4">
        <label><span class="label label-default"> 5 </span>&nbsp;&nbsp;&nbsp;Largo Manga</label>
      </div>
        <div class="col-md-4">
          <input type="text" id="estatura" name="estatura" class="form-control mini_input" placeholder="">
        </div>
      </div>

      <div class="form-group">
<div class="col-md-4">
        <label><span class="label label-default"> 6 </span>&nbsp;&nbsp;&nbsp;Largo Falda</label>
      </div>
        <div class="col-md-4">
          <input type="text" id="estatura" name="estatura" class="form-control mini_input" placeholder="">
        </div>
      </div>

      <div class="form-group">
<div class="col-md-4">
        <label><span class="label label-default"> 7 </span>&nbsp;&nbsp;&nbsp;Largo Pantalon</label>
      </div>
        <div class="col-md-4">
          <input type="text" id="estatura" name="estatura" class="form-control mini_input" placeholder="">
        </div>
      </div>

      <div class="form-group">
<div class="col-md-4">
        <label><span class="label label-default"> 8 </span>&nbsp;&nbsp;&nbsp;Contorno Brazo</label>
      </div>
        <div class="col-md-4">
          <input type="text" id="estatura" name="estatura" class="form-control mini_input" placeholder="">
        </div>
      </div>

      <div class="form-group">
<div class="col-md-4">
        <label><span class="label label-default"> 9 </span>&nbsp;&nbsp;&nbsp;Contorno Muslo</label>
      </div>
        <div class="col-md-4">
          <input type="text" id="estatura" name="estatura" class="form-control mini_input" placeholder="">
        </div>
      </div>

    </div>
    <div class="col-xs-6">
      <img src="/assets/img/dos-f.png" alt="" style="max-height: 200px;">
      <img src="/assets/img/uno-f.png" alt="" style="max-height: 400px;">
    </div>
</div>

<button type="submit" class="btn btn-success">Enviar Medidas</button>
</form>
@include('layouts.footer')
@endsection
