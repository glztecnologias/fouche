required<?php $seccion = 'empleado'; ?>
@extends('dashboard')
@section('title','Toma_medidas')
@section('content')
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
<form action="/toma_de_medida/guardar" method="post" class="form-horizontal">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden"  name="id_usuario" value="{{$usuario->id}}" required>
<input type="hidden"  name="id_toma" value="{{$toma->id}}" required>

<div class="row">
  <div class="col-md-6">
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
  <div class="col-md-6">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Tallas Sugeridas</strong></h3>
      </div>
      <div class="panel-body">
        <span style="float:left;margin-left:5px;">
          <label class="control-label" >Chaqueta</label>
          <input type="text"  name="veston_chaqueta" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu talla de Chaqueta" required>
        </span>
        <span style="float:left;margin-left:5px;">
          <label class="control-label" >Falda</label>
          <input type="text"  name="falda" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu talla de Falda" required>
        </span>
        <span style="float:left;margin-left:5px;">
          <label class="control-label" >Blusa</label>
          <input type="text"  name="camisa_blusa" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu talla de Blusa" required>
        </span>
        <span style="float:left;margin-left:5px;">
          <label class="control-label" >Pantalon</label>
          <input type="text"  name="pantalon" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu talla de Pantalon" required>
        </span>
        <span style="float:left;margin-left:5px;">
          <label class="control-label" >Polera</label>
          <input type="text"  name="polera" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu talla de Polera" required>
        </span>

      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"><strong>Medidas</strong></h3>
      </div>
      <div class="panel-body">
        <div class="col-xs-6 col-md-4">
          <img src="/assets/img/dos-f.png" alt="" style="max-height: 180px;">
          <img src="/assets/img/uno-f.png" alt="" style="max-height: 300px;">
        </div>
        <div class="col-xs-6 col-md-4">
            <label class="control-label" ><span class="label label-primary ">1</span> Ancho Espalda (cm)</label>
            <input style="width:100%;" type="number"  name="ancho_espalda" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="TOMAR DESDE EL HUESO QUE SOBRESALE EN HOMBRO, AL OTRO POR DETRÁS"  required>

            <label class="control-label" ><span class="label label-primary">2</span> Busto (cm)</label>
            <input style="width:100%;" type="number"  name="busto" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="MIDA EL CONTORNO EN LA PARTE MAS ANCHA SIN APRETAR LA HUINCHA, ES IMPORTANTE NO DAR HOLGURA" required>

            <label class="control-label" ><span class="label label-primary">3</span> Cintura (cm)</label>
            <input style="width:100%;" type="number"  name="cintura" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="TOMAR DIRECTAMENTE SOBRE EL CUERPO, NO SOBRE CINTURONES O ROPA" required>

            <label class="control-label" ><span class="label label-primary">4</span> Cadera Baja (cm)</label>
            <input style="width:100%;" type="number"  name="cadera_baja" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="TOMAR EN LA PARTE MAS ANCHA DE SU CADERA" required>

            <label class="control-label" ><span class="label label-primary">5</span> Largo Manga (cm)</label>
            <input style="width:100%;" type="number"  name="largo_manga" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="TOMAR CON EL BRAZO DOBLADO, PASANDO POR EL CODO, DESDE HUESO SUPERIOR DEL HOMBRO AL HUESO DE LA MUÑECA" required>
        </div>
        <div class="col-xs-6 col-md-4">
            <label class="control-label" ><span class="label label-primary ">6</span> Largo Falda (cm)</label>
            <input style="width:100%;" type="number"  name="largo_falda" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="DESDE LA CINTURA HASTA EL LARGO DESEADO "  required>

            <label class="control-label" ><span class="label label-primary">7</span> Largo Pantalon (cm)</label>
            <input style="width:100%;" type="number"  name="largo_pantalon" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="DESDE LA CINTURA HASTA EL LARGO DESEADO " required>

            <label class="control-label" ><span class="label label-primary">8</span> Contorno Brazo (cm)</label>
            <input style="width:100%;" type="number"  name="contorno_brazo" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Contorno Brazo (cm)" required>

            <label class="control-label" ><span class="label label-primary">9</span> Contorno Muslo (cm)</label>
            <input style="width:100%;" type="number"  name="contorno_muslo" class="form-control mini_input input-sm" data-toggle="tooltip" data-placement="bottom" title="Contorno Muslo (cm)" required>
            <br>
            <p  class="text-right"><button type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="Clic para enviar medidas"><strong>Enviar Medidas</strong>  </button></p>

          </div>

      </div>
    </div>
  </div>
  <span style="font-size:14px;" class="label label-danger text-right">Todos los campos son obligatorios
  * Todas las medidas deben ser centimetros <br>
</span>
</div>

</form>
@include('layouts.footer')
@endsection
