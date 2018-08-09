<?php $seccion = 'empleado'; ?>
@extends('dashboard')
@section('title','Toma_medidas')
@section('content')
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
  .control-label{
    font-size: 12px;
  }
</style>
<form action="/toma_de_medida/guardar" method="post" class="form-horizontal" id="formulario">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden"  name="id_usuario" value="{{$usuario->id}}" required>
<input type="hidden"  name="id_toma" value="{{$toma->id}}" required>

<div class="row">
  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Datos Basicos</strong></h3>
      </div>
      <div class="panel-body">
        <span style="float:left;margin-left:5px;">
          <label for="peso" class="control-label" >Peso</label>
          <input type="text" id="peso" name="peso" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu peso" required>
        </span>

        <span style="float:left;margin-left:5px;">
          <label for="estatura" class="control-label" >Estatura</label>
          <input type="text" id="estatura" name="estatura" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu estatura" required>
        </span>

        <span style="float:left;margin-left:5px;width:50%;">
        <label for="observaciones" class="control-label" >Observaciones</label>
        <input type="text" id="observaciones" name="observaciones" class="form-control input-sm" data-toggle="tooltip" data-placement="bottom" title="Ingresa si tienes observaciones a tus medidas/tallas" value=" ">
        </span>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Tallas Sugeridas</strong></h3>
      </div>
      <div class="panel-body">
        <span style="float:left;margin-left:5px;">
          <label class="control-label" >Veston</label>
          <input type="text"  name="veston_chaqueta" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu talla de veston" required>
        </span>
        <span style="float:left;margin-left:5px;">
          <label class="control-label" >Camisa</label>
          <input type="text"  name="camisa_blusa" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu talla de camisa" required>
        </span>
        <span style="float:left;margin-left:5px;">
          <label class="control-label" >Pantalon</label>
          <input type="text"  name="pantalon" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu talla de pantalon" required>
        </span>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Medidas para: CAMISA</strong> </h3>
      </div>
      <div class="panel-body">
        <span style="float:left;margin-left:5px;width:40%;">
          <label class="control-label"><span class="label label-primary">#</span>N° de Camisa</label>
          <input  style="width:90px;" type="number"  name="numero_camisa" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Numero de camisa (cuello)"  required>
        </span>
        <span style="float:left;margin-left:5px;width:40%;">
          <label class="control-label"><span class="label label-primary">#</span> Contorno Cuello</label>
          <input  style="width:110px;" type="number"  name="contorno_cuello" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Contorno cuello (CM)"  required>
        </span>
      </div>
    </div>
  </div>
</div>



  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>Medidas para: VESTON</strong> <small>(Medidas en cm)</small></h3>
        </div>
        <div class="panel-body">
          <div class="col-xs-12 col-md-8">
            <img src="/assets/img/uno-m.png" alt="" style="max-height: 200px;">
            <img src="/assets/img/dos-m.png" alt="" style="max-height: 200px;">
          </div>
          <div class="col-xs-6 col-md-4">
              <label class="control-label" ><span class="label label-primary ">1</span> Largo</label>
              <input style="width:100%;" type="number"  name="largo_veston" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Largo de Veston (cm)"  required>

              <label class="control-label" ><span class="label label-primary">2</span> Ancho Espalda</label>
              <input style="width:100%;" type="number"  name="ancho_espalda_veston" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ancho Espalda (cm)" required>

              <label class="control-label" ><span class="label label-primary">3</span> Largo Manga</label>
              <input style="width:100%;" type="number"  name="largo_manga_veston" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Largo Manga (cm)" required>

              <label class="control-label" ><span class="label label-primary">4</span> Contorno Pecho</label>
              <input style="width:100%;" type="number"  name="contorno_pecho_veston" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Contorno Pecho (cm)" required>

              <label class="control-label" ><span class="label label-primary">5</span> Contorno Cintura</label>
              <input style="width:100%;" type="number"  name="contorno_cintura_veston" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Contorno Cintura (cm)" required>


          </div>
        </div>
      </div>
      <span style="font-size:14px;" class="label label-danger text-right">Todos los campos son obligatorios <br>
      * Todas las medidas deben ser centimetros <br>
    </span>
    </div>
    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>Medidas para: PANTALON</strong> <small> (Medidas en cm)</small></h3>
        </div>
        <div class="panel-body">
          <div class="col-md-6">
            <img src="/assets/img/tres-m.png" alt="" style="max-height: 300px;">
          </div>
          <div class="col-md-6">
            <label class="control-label"><span class="label label-primary">6</span> Contorno Cintura</label>
            <input style="width:80%;"  type="number" name="contorno_cintura_pantalon" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Contorno Cintura (cm)" required>

            <label class="control-label"><span class="label label-primary">7</span> Largo Total</label>
            <input style="width:80%;" type="number"  name="largo_pantalon" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Largo Total Pantalon (cm)" required>

            <label class="control-label"><span class="label label-primary">9</span> Ancho Cadera</label>
            <input style="width:80%;" type="number"  name="ancho_cadera_pantalon" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ancho de Cadera (cm)" required>

            <label class="control-label"><span class="label label-primary">9</span> Contorno Rodilla</label>
            <input style="width:80%;" type="number"  name="contorno_rodilla_pantalon" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Contorno de Rodilla (cm)" required>

            <label class="control-label"><span class="label label-primary">10</span> Contorno de Basta</label>
            <input style="width:80%;" type="number"  name="contorno_basta_pantalon" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Contorno de Basta (cm)" required>
          </div>


        </div>
      </div>

    </div>
    <p style="margin-right:15px;" class="text-right"><button type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="Clic para enviar medidas"><strong>Enviar Medidas</strong>  </button></p>
  </div>




</form>
@include('layouts.footer')
@endsection
