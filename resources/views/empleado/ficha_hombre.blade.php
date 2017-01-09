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
    /**border-left: 1px dotted gray;**/
  }
  .division1{
  /**  border-top: 1px dotted gray; **/
  }
  .label span{
    font-size: 9px;
  }
</style>
<form action="/toma_de_medida/guardar" method="post" class="form-horizontal" id="formulario">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row division1">

    <div class="col-xs-6 ">
      <h4><span class="label label-primary">Datos Basicos</span></h4>
      <p><label>Nombre :</label>{{$usuario->nombre}}</p>
      <p><label>Rut: </label> {{$usuario->rut}}</p>
      <input type="hidden"  name="id_usuario" value="{{$usuario->id}}" required>
      <input type="hidden"  name="id_toma" value="{{$toma->id}}" required>
      <div class="form-group">
        <label for="peso" class="col-sm-2 control-label" >Peso</label>
        <div class="col-sm-10">
          <input type="text" id="peso" name="peso" class="form-control mini_input" placeholder="" required>
        </div>
      </div>

      <div class="form-group">
        <label for="estatura" class="col-sm-2 control-label" >Estatura</label>
        <div class="col-sm-10">
          <input type="text" id="estatura" name="estatura" class="form-control mini_input" placeholder="" required>
        </div>
      </div>

      <div class="form-group">
        <label for="observaciones" class="col-sm-2 control-label" >Observaciones</label>
        <div class="col-sm-10">
          <input type="text" id="observaciones" name="observaciones" class="form-control" required>
        </div>
      </div>

    </div>
    <div class="col-xs-6 division2">
      <h4><span class="label label-primary">Sugerencia de Talla</span></h4>

      <div class="form-group ">
        <label class="col-sm-2 control-label" >Veston</label>
        <div class="col-sm-10">
          <input type="text"  name="veston_chaqueta" class="form-control mini_input" required>
        </div>
      </div>

      <div class="form-group ">
        <label class="col-sm-2 control-label" >camisa</label>
        <div class="col-sm-10">
          <input type="text"  name="camisa_blusa" class="form-control mini_input" required>
        </div>
      </div>

      <div class="form-group ">
        <label class="col-sm-2 control-label" >pantalon</label>
        <div class="col-sm-10">
          <input type="text"  name="pantalon" class="form-control mini_input" required>
        </div>
      </div>
    </div>
</div>

<div class="row division1">
<h4><span class="label label-primary">Medidas</span></h4>
    <div class="col-md-6">
<div class="col-md-4">
     <h5><span class="label label-info">Veston</span></h5>
      <div class="form-group">
        <div class="col-md-4">
          <label><span class="label label-default">1</span>&nbsp;&nbsp;&nbsp; Largo</label>
        </div>
        <div class="col-md-4">
          <input type="number" min="1" max="100" name="largo_veston" class="form-control mini_input" placeholder="" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-4">
          <label><span class="label label-default">2</span>&nbsp;&nbsp;&nbsp; Ancho Espalda</label>
        </div>
        <div class="col-md-4">
          <input type="number" min="1" max="100" name="ancho_espalda_veston" class="form-control mini_input" placeholder="" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-4">
          <label><span class="label label-default">3</span>&nbsp;&nbsp;&nbsp; Largo Manga</label>
        </div>
        <div class="col-md-4">
          <input type="number" min="1" max="100" name="largo_manga_veston" class="form-control mini_input" placeholder="" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-4">
          <label><span class="label label-default">4</span>&nbsp;&nbsp;&nbsp; Contorno Pecho</label>
        </div>
        <div class="col-md-4">
          <input type="number" min="1" max="100" name="contorno_pecho_veston" class="form-control mini_input" placeholder="" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-4">
          <label><span class="label label-default">5</span>&nbsp;&nbsp;&nbsp; Contorno Cintura</label>
        </div>
        <div class="col-md-4">
          <input type="number" min="1" max="100" name="contorno_cintura_veston" class="form-control mini_input" placeholder="" required>
        </div>
      </div>
      <h5><span class="label label-info">Camisa</span></h5>
      <div class="form-group">
        <div class="col-md-4">
          <label><span class="label label-default">#</span>&nbsp;&nbsp;&nbsp; Camisa Cuello n°</label>
        </div>
        <div class="col-md-4">
          <input type="number" min="1" max="100" name="numero_camisa" class="form-control mini_input" placeholder="" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-4">
          <label><span class="label label-default">#</span>&nbsp;&nbsp;&nbsp; Contorno Cuello</label>
        </div>
        <div class="col-md-4">
          <input type="number" min="1" max="100" name="contorno_cuello" class="form-control mini_input" placeholder="" required>
        </div>
      </div>
      </div>
      <div class="col-md-4">
        <img src="/assets/img/uno-m.png" alt="" style="max-height: 200px;">
        <img src="/assets/img/dos-m.png" alt="" style="max-height: 200px;">
      </div>


    </div>
    <div class="col-md-6">
      <div class="col-md-4">
      <h5><span class="label label-info">Pantalon</span></h5>
       <div class="form-group">
         <div class="col-md-4">
           <label><span class="label label-default">6</span>&nbsp;&nbsp;&nbsp; Contorno Cintura</label>
         </div>
         <div class="col-md-4">
           <input type="number" min="1" max="100" name="contorno_cintura_pantalon" class="form-control mini_input" placeholder="" required>
         </div>
       </div>
       <div class="form-group">
         <div class="col-md-4">
           <label><span class="label label-default">7</span>&nbsp;&nbsp;&nbsp; Largo Total</label>
         </div>
         <div class="col-md-4">
           <input type="number" min="1" max="100" name="largo_pantalon" class="form-control mini_input" placeholder="" required>
         </div>
       </div>
       <div class="form-group">
         <div class="col-md-4">
           <label><span class="label label-default">9</span>&nbsp;&nbsp;&nbsp; Ancho Cadera</label>
         </div>
         <div class="col-md-4">
           <input type="number" min="1" max="100" name="ancho_cadera_pantalon" class="form-control mini_input" placeholder="" required>
         </div>
       </div>
       <div class="form-group">
         <div class="col-md-4">
           <label><span class="label label-default">9</span>&nbsp;&nbsp;&nbsp; Contorno Rodilla</label>
         </div>
         <div class="col-md-4">
           <input type="number" min="1" max="100" name="contorno_rodilla_pantalon" class="form-control mini_input" placeholder="" required>
         </div>
       </div>
       <div class="form-group">
         <div class="col-md-4">
           <label><span class="label label-default">10</span>&nbsp;&nbsp;&nbsp; Contorno de Basta</label>
         </div>
         <div class="col-md-4">
           <input type="number" min="1" max="100" name="contorno_basta_pantalon" class="form-control mini_input" placeholder="" required>
         </div>
       </div>
       </div>
     <div class="col-md-4">
        <img src="/assets/img/tres-m.png" alt="" style="max-height: 300px;">
       </div>
    </div>


</div>
<button type="submit" class="btn btn-success">Enviar Medidas</button>
</form>
@include('layouts.footer')
@endsection
