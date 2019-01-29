<?php $seccion = 'empresa'; ?>
<?php $pagina = 'index'; ?>
@extends('dashboard')
@section('title','Empresa - Inicio')
@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight:bold;"><span class="label label-danger">1°</span> - SUBIR LISTA Y CREAR TOMA DE MEDIDA</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-6">
        <form  action="/importExcel2" class="form-horizontal" method="post" enctype="multipart/form-data" >
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <span class="label label-primary" style="float:left;margin-right:10px;"> :: 1 :: </span> <span style="width:450px;float:left">
             <input  type="text" name="orden_de_compra" placeholder=" N° Orden de Compra..." required/>
           </span>

          <br>
          <br>
    			<span class="label label-primary" style="float:left;margin-right:10px;"> :: 2 :: </span> <span style="width:350px;float:left">
            <input  type="file" name="import_file" required/></span>
              <br>
              <br>
    			<span class="label label-primary" style="float:left;margin-right:10px;"> :: 3 :: </span> <span style="float:left">
            <button class="btn btn-success btn-lg"><i class="fa fa-upload" aria-hidden="true"></i> Subir y Generar Pedido <i class="fa fa-table" aria-hidden="true"></i></button>
          </span>
    		</form>


      </div>
      <div class="col-md-6">



        <button  class="btn btn-danger" role="button" data-toggle="collapse" href="#ayuda" aria-expanded="false" aria-controls="ayuda"  title="Clic para ver ayuda..." >
          Ver Intrucciones <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </button>
        <br>
        <div class="collapse" id="ayuda">
          <div class="well">
           <p>Para registrar a los empleados debes descargar <a href="\planilla_vacia_fouche.xlsx" class="label label-success" style="font-size:15px;" ><i class="fa fa-download" aria-hidden="true"></i>
             esta planilla  <i class="fa fa-file-excel-o" aria-hidden="true"></i>
           </a>, en la cual debes rellenar solo los campos que se solicitan.</p><br>

           <ul>
             <li>El RUT debe estar completo, Ejemplo: <span class="label label-primary" style="font-size:15px;">16069022-4</span> OJO  sin puntos.</li>
             <li>El SEXO o GENERO debe ser solo una letra  <strong style="font-size:20px;">m</strong> (Masculino) y <strong style="font-size:20px;">f</strong> (Femenino)</li>
           </ul>
           <hr>
           <strong>Luego de completarlo:</strong><br><br>
           <span class="label label-primary" style="float:left;margin-right:10px;"> :: 1 :: </span> Ingresa el numero de "Orden de Compra" asociado. <br>
           <span class="label label-primary" style="float:left;margin-right:10px;"> :: 2 :: </span> Presionar boton "examinar" o "seleccionar archivo". <br>
           <span class="label label-primary" style="float:left;margin-right:10px;"> :: 3 :: </span> Presionar el boton SUBIR. <br>
          </div>
        </div>







      </div>
    </div>


  </div>
</div>

@forelse($toma_medida as $toma)
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight:bold;"><span class="label label-danger">ID: {{ $toma->id }}  - CODIGO: {{$toma->codigo_acceso}} </span> -  MONITOREA LA TOMA DE MEDIDAS</h3>
  </div>
  <div class="panel-body">

    <table class="table">
        <thead>
          <tr>
            <th class="text-left">INFORMACION GENERAL</th>
            <th class="text-right">GRAFICO DE AVANCE</th>
            <!--<th class="text-center">ENVIAR A FOUCHE</th>-->
          </tr>
        </thead>
        <tbody>
          
          <tr >
            <td >
              <?php
              $date = $toma->created_at;
              $new_date = date_format($date, 'd/m/Y H:i:s');
               ?>
              <span class="label label-primary" style="">FECHA</span> : <strong>{{$new_date}}</strong> <br>
              <span class="label label-primary" style="">CODIGO ACCESO</span> : <strong>{{$toma->codigo_acceso}}</strong> <br>
              <span class="label label-primary" style="">TOTAL</span> : <strong>{{$toma->seleccion->count()}}</strong> Empleados<br>
              <span class="label label-primary" style="">ORDEN DE COMPRA</span> : <strong>{{$toma->orden_de_compra}}  </strong><br>
              <hr>
              <h4>Completacion de Fichas</h4>
              <span class="label label-success" style="">COMPLETADOS</span> : <strong>{{$toma->medida->count()}}</strong><br>
              <span class="label label-danger" style="">PENDIENTES</span> : <strong>{{$toma->seleccion->count()-$toma->medida->count()}}</strong><br>
            </td>
            <td style="float:right;">
              <div id="container{{$toma->id}}" style="max-width:240px;" height=180></div>
              <script type="text/javascript">
              var chart = c3.generate({
                size: {
                          height: 230,
                          width: 270
                      },
                bindto: '#container'+{{$toma->id}},
                data: {
                      columns: [
                          ['Completados', {{$toma->medida->count()}}],
                          ['Faltan', {{$toma->seleccion->count()-$toma->medida->count()}}]
                      ],
                      type : 'donut',
                      onclick: function (d, i) { console.log("onclick", d, i); },
                      onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                      onmouseout: function (d, i) { console.log("onmouseout", d, i); }
                  },
                  donut: {
                      title: "Toma de Medidas"
                  },
                  color: {
                      pattern: ["#449d44","#c9302c"]
                  }
              });



                  chart.unload({
                      ids: 'data'
                  });
              </script>

            </td>
            <!--<td class="text-center">
              <br>
              <br>
              <br>
              <br>


              @if($toma->medida->count() > 0)
              <form class="" action="index.html" method="post">
                  <input type="hidden" id="id_toma" value="{{$toma->id}}">
                  <input type="hidden" id="orden_compra" value="{{$toma->orden_de_compra}}" >

                <a href="javascript:crear_pedido()" class="btn btn-success btn-lg" type="button">
                  <i class="fa fa-hand-o-up" aria-hidden="true" ></i> Enviar Pedido a Fouche
                </a>
              </form>
              @endif
             
             <button class="btn btn-danger btn-lg" type="button" disabled="disabled">
                <i class="fa fa-hand-o-up" aria-hidden="true" ></i> Enviar Pedido a Fouche
              </button>
              <br>
              
   
            </td>-->
          </tr>

        </tbody>
    </table>

  </div>
</div>
@empty
@endforelse

@include('layouts.footer')
@endsection
