
<a href="javascript:imprSelec('ficha{{$medida->id}}')" class="text-right btn btn-success btn-xs" style="float:center;"> <i class="fa fa-print" aria-hidden="true"></i>
 Imprimir Ficha </a>
<div id="ficha{{$medida->id}}" style="margin:10px;">
<div class="panel panel-primary">
  <div class="panel-heading">
     <span class="text-left"><h5 class="panel-title">Datos Basicos</h5></span>

   </div>
   <div class="panel-body">
     <strong>Nombre  </strong>: <u>{{$medida->users->nombre}}</u> &nbsp;&nbsp; <strong>Empresa</strong>: <u>{{$medida->users->empresa->nombre}}</u>&nbsp;&nbsp;<strong>Sucursal  </strong>: <u>{{$medida->users->nombre_sucursal}}</u> &nbsp;&nbsp; <strong>Direccion Sucursal</strong>: <u>{{$medida->users->direccion_sucursal}}</u><br>

     <strong>Rut  </strong>: <u>{{$medida->users->rut}}</u> &nbsp;&nbsp; <strong>Telefono</strong>: <u>{{$medida->users->telefono}}</u> &nbsp;&nbsp; <strong>Fecha de Registro</strong>: <u>{{$medida->created_at}}</u><br>
   </div>
</div>



  @if($medida->users->sexo=='f' || $medida->users->sexo=='F')

  <div class="panel panel-primary">
    <div class="panel-heading">
       <h5 class="panel-title">Tallas Sugeridas</h5>
     </div>
     <div class="panel-body">
       <div class="row">
        <div class="col-md-4">
          <strong>Chaqueta  </strong>: <u>{{$medida->tallas_sugeridas->veston_chaqueta}}</u><br>
          <strong>Blusa  </strong>: <u>{{$medida->tallas_sugeridas->camisa_blusa}}</u><br>
          <strong>Polera  </strong>: <u>{{$medida->tallas_sugeridas->polera}}</u><br>
        </div>
        <div class="col-md-4">
          <strong>Falda  </strong>: <u>{{$medida->tallas_sugeridas->falda}}</u><br>
          <strong>Pantalon  </strong>: <u>{{$medida->tallas_sugeridas->pantalon}}</u><br>
        </div>
        <div class="col-md-4">
          <strong>Estatura  </strong>: <u>{{$medida->tallas_sugeridas->estatura}}</u>(M)<br>
          <strong>Peso  </strong>: <u>{{$medida->tallas_sugeridas->peso}}</u> (Kg)<br>

        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8">
          <strong>Observaciones  </strong>: <u>{{$medida->tallas_sugeridas->observaciones}}</u><br>
        </div>

      </div>
     </div>
  </div>

  <div class="panel panel-primary">
    <div class="panel-heading">
       <h5 class="panel-title">Medidas</h5>
     </div>
     <div class="panel-body">
       <div class="row">
         <div class="col-xs-6">

           <strong> 1 - Ancho de Espalda  </strong>:<span class="badge" style="font-size:12px;">{{$medida->m_mujeres->ancho_espalda}}</span> (CM) <br>
           <strong> 2 - Busto  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_mujeres->busto}}</span> (CM) <br>
           <strong> 3 - Cintura  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_mujeres->cintura}}</span> (CM) <br>
           <strong> 4 - Cadera Baja  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_mujeres->cadera_baja}}</span> (CM) <br>
           <strong> 5 - Largo Manga  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_mujeres->largo_manga}}</span> (CM) <br>
           <strong> 6 - Largo Falda  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_mujeres->largo_falda}}</span> (CM) <br>
           <strong> 7 - Largo Pantalon  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_mujeres->largo_pantalon}}</span> (CM) <br>
           <strong> 8 - Contorno Brazo  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_mujeres->contorno_brazo}}</span> (CM) <br>
           <strong> 9 - Contorno Muslo  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_mujeres->contorno_muslo}}</span> (CM) <br>

         </div>
         <div class="col-xs-6">

           <img src="/assets/img/dos-f.png" alt="" style="max-height: 130px;">
           <img src="/assets/img/uno-f.png" alt="" style="max-height: 250px;">

         </div>
       </div>

     </div>
  </div>

  @endif




  @if($medida->users->sexo=='m' || $medida->users->sexo=='M')


  <div class="panel panel-primary">
    <div class="panel-heading">
       <h5 class="panel-title">Tallas Sugeridas</h5>
     </div>
     <div class="panel-body">

       <div class="row">
        <div class="col-md-4">
          <strong>Veston  </strong>: <u>{{$medida->tallas_sugeridas->veston_chaqueta}}</u><br>
          <strong>Camisa  </strong>: <u>{{$medida->tallas_sugeridas->camisa_blusa}}</u><br>
        </div>
        <div class="col-md-4">
          <strong>Pantalon  </strong>: <u>{{$medida->tallas_sugeridas->pantalon}}</u><br>
        </div>
        <div class="col-md-4">
          <strong>Estatura  </strong>: <u>{{$medida->tallas_sugeridas->estatura}}</u>(M)<br>
          <strong>Peso  </strong>: <u>{{$medida->tallas_sugeridas->peso}}</u> (Kg)<br>

        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8">
          <strong>Observaciones  </strong>: <u>{{$medida->tallas_sugeridas->observaciones}}</u><br>
        </div>

      </div>
     </div>
  </div>


  <div class="panel panel-primary">
    <div class="panel-heading">
       <h5 class="panel-title">Medidas</h5>
     </div>
     <div class="panel-body">
       <div class="row">
         <div class="col-xs-6">

           <strong> 1 - Largo de Veston  </strong>:<span class="badge" style="font-size:12px;">{{$medida->m_hombres->veston_largo}}</span> (CM) <br>
           <strong> 2 - Ancho de Espalda Veston  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_hombres->veston_ancho_espalda}}</span> (CM) <br>
           <strong> 3 - Largo de Mangas Veston  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_hombres->veston_largo_manga}}</span> (CM) <br>
           <strong> 4 - Contorno Pecho veston  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_hombres->veston_contorno_pecho}}</span> (CM) <br>
           <strong> 5 - Contorno Cintura Veston  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_hombres->veston_contorno_cintura}}</span> (CM) <br>
           <strong> 6 - Contorno Cintura Pantalon  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_hombres->pantalon_contorno_cintura}}</span> (CM) <br>
           <strong> 7 - Largo Total Pantalon  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_hombres->pantalon_largo_total}}</span> (CM) <br>
           <strong> 8 - Ancho de Cadera Pantalon  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_hombres->pantalon_ancho_cadera}}</span> (CM) <br>
           <strong> 9 - Contorno de Rodilla Pantalon  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_hombres->pantalon_contorno_rodilla}}</span> (CM) <br>
           <strong> 10 - Contorno de Basta Pantalon  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_hombres->pantalon_contorno_basta}}</span> (CM) <br>
           <strong> # - Contorno de Cuello (cm)  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_hombres->contorno_cuello_cm}}</span> (CM) <br>
           <strong> # - Talla de Camisa (n°)  </strong>: <span class="badge" style="font-size:12px;">{{$medida->m_hombres->camisa_cuello_n}}</span> (N°) <br>
         </div>
         <div class="col-xs-6">

           <img src="/assets/img/uno-m.png" alt="" style="max-height: 200px;">
           <img src="/assets/img/dos-m.png" alt="" style="max-height: 200px;">
           <img src="/assets/img/tres-m.png" alt="" style="max-height: 250px;">

         </
       </div>

     </div>
  </div>



  @endif




</div>
