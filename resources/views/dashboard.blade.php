<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Fouche |  @yield('title')</title>
    <!-- Bootstrap Core CSS -->
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/assets/css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/libs/colorbox/css/colorbox.css" rel="stylesheet">

      <link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" type="text/css">
        <link href="https://cdn.datatables.net/buttons/1.2.3/css/buttons.dataTables.min.css" type="text/css">
        <link href="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js" type="text/css">

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="screen">

    hr {
        -moz-border-bottom-colors: none;
        -moz-border-image: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        border-color: #EEEEEE -moz-use-text-color #FFFFFF;
        border-style: solid none;
        border-width: 1px 0;
        margin: 18px 0;
      }
      .linea_form{
        margin-right: 20px;
        margin-top: 10px;
      }
      .dataTables_filter{
        float: right;
        font-size: 13px;
        margin-bottom: 10px;
      }
      .dataTables_filter input{
        height: 23px;
font-size: 12px;
      }
      .pagination{
        float: right;
        font-size: 10px;
      }
      .modal_cont{
        margin: 20px;
      }
    .selected{
        background-color: lightgrey;
      }
      tfoot input {
          width: 100%;
          padding: 3px;
          box-sizing: border-box;
      }
      @-moz-document url-prefix() {
  fieldset { display: table-cell; }
}
.titulo-sec{
  font-size: 14px;
  color: black;
  font-weight: bold;
}
.navbar-nav li{
  border-bottom:1px solid black;
}
    </style>

    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.3/js/dataTables.buttons.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    <script src="https://cdn.jsdelivr.net/es6-promise/latest/es6-promise.min.js"></script>
    <!-- Bootstrap Core JavaScript -->

    <script src="/libs/datepicker/js/moment-with-locales.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
    <script src="/libs/sweetalert2/js/sweetalert2.min.js"></script>
    <link href="/libs/sweetalert2/css/sweetalert2.css" rel="stylesheet" type="text/css">
    <script src="/libs/rut/jquery.rut.js"></script>
    <style media="screen">

    </style>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.bundle.js"></script>-->

    <link href="/libs/c3/c3.min.css" rel="stylesheet" type="text/css">
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script src="/libs/c3/c3.min.js"></script>

    <script src="/libs/colorbox/js/jquery.colorbox-min.js"></script>
    <script type="text/javascript">



    //##############################################################################
//###############             CARGA INICIAL                  ###################
//##############################################################################
$(document).ready(function() {





//********************************************************************************
      $('.data-table').DataTable({
            "language": {
               "lengthMenu": "Ver _MENU_ registros",
               "zeroRecords": "No existen registros",
               "info": " Pagina _PAGE_ de _PAGES_",
               "infoEmpty": "No existen registros",
               "infoFiltered": "(filtered from _MAX_ total records)",
               "search": "Buscar:",
               "paginate": {
                "first":      "Primero",
                "previous":   "<<",
                "next":       ">>",
                "last":       "Ultimo"
            }
          }
      });

      $('.lista_orden_corte').DataTable( {
        "scrollY": "600px",
        "scrollCollapse": true,
        "paging": false,
        "language": {
           "lengthMenu": "Ver _MENU_ registros",
           "zeroRecords": "No existen registros",
           "info": " Pagina _PAGE_ de _PAGES_",
           "infoEmpty": "No existen registros",
           "infoFiltered": "(filtered from _MAX_ total records)",
           "search": "Buscar:",
           "paginate": {
            "first":      "Primero",
            "previous":   "<<",
            "next":       ">>",
            "last":       "Ultimo"
        }
      }

      });

      $('#tabla-empleados tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Buscar en '+title+'" />' );
      } );


      var tabla_empleados = $('.data-table-tmedida').DataTable({
            "info": false,
            "scrollY":        "400px",
            "scrollCollapse": true,
            "paging":   false,
            "language": {
                "search": "Buscar:"
                      },
            responsive: true
        });


      var tabla_empleados = $('.data-table-sp').DataTable({
        dom: 'Bfrtip',
        buttons: [

            'selectAll',
            'selectNone'
        ],
        "scrollY":        "350px",
        "scrollCollapse": true,
         "paging":   false,

         select: {
              style: 'multi'
          },

          language: {
            select: {
                rows: {
                    _: " %d registros Seleccionados"
                  //  0: "Haz clic en un registro para seleccionar",
                //    1: "Solo 1 registro seleccionado"
                }
            },
            "search": "Buscar:"
        },
        responsive: true
     });

     // Apply the search
      tabla_empleados.columns().every( function () {
          var that = this;

          $( 'input', this.footer() ).on( 'keyup change', function () {
              if ( that.search() !== this.value ) {
                  that
                      .search( this.value )
                      .draw();
              }
          } );
      } );


    $('.modalx').colorbox({maxWidth:'500px'});
    $('.modalx3').colorbox();
    $('.modal2').colorbox();
    $('.modal4').colorbox({width:'900px'});
    $('.modal_item_nuevo').colorbox();
    $('.buttons-select-all span').html('Todo <i class="fa fa-check-square" aria-hidden="true"></i>');
    $('.buttons-select-all').addClass("btn btn-primary btn-xs");
    $('.buttons-select-all').attr("title","Seleccionar Todo");
    $('.buttons-select-all').css("margin-right","10px");

    $('.buttons-select-none span').html('Nada <i class="fa fa-minus-square" aria-hidden="true"></i>');
    $('.buttons-select-none').addClass("btn btn-danger btn-xs");
    $('.buttons-select-none').attr("title","Borrar Seleccion");

    $('.buttons-select-all').css("","10px");

    $(".dataTables_info").contents().filter(function () {return this.nodeType != 1;}).replaceWith("");

$('[data-toggle="tooltip"]').tooltip();


//***************************************************************************************************



/**var ctx2 = document.getElementById("container");

var data2 = {
    labels: [
        "Fichas Completadas",
        "Fichas Pendientes"
    ],
    datasets: [
        {
            data: [300, 50],
            backgroundColor: [
              "#449d44","#c9302c"
            ],
            hoverBackgroundColor: [
                "#5cb85c","#d9534f"
            ]
        }]
};

var myChart2 = new Chart(ctx2, {
  type: 'doughnut',
      data: data2,
      options: {
          responsive: true,
          legend: {
            position: 'bottom',
          },
          title: {
            display: false,
            text: 'Chart.js Doughnut Chart'
          },
          animation: {
            animateScale: true,
            animateRotate: true
          },
          tooltips: {
            callbacks: {
              label: function(tooltipItem, data) {
                var dataset = data.datasets[tooltipItem.datasetIndex];
                var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                  return previousValue + currentValue;
                });
                var currentValue = dataset.data[tooltipItem.index];
                var precentage = Math.floor(((currentValue/total) * 100)+0.5);
                return precentage + "%";
              }
            }
          }
        }
});**/

///////////////////////////////////////////////////////////////////////////////
});

function elimina_recurso(id_recurso,url_elimina){
  swal({
  title: '¿Estas seguro?',
  text: "Se eliminaran tambien los registros asociados.",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
  cancelButtonText: 'Cancelar'
}).then(function() {
$.ajax({
  url:url_elimina,
  headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
  method: 'POST',
  data:{id:id_recurso},
  success: function(data){
    if(data=="error"){
      swal('Ops!','El registro no se a eliminado, contacta al administrador.','warning');
    }
    if(data=="ok"){
      swal('Eliminado!','El registro a sido eliminado.','success');
      location.reload();
    }
  }});

});
}

function crea_toma_medida(){
  var seleccionados = trae_seleccionados();
  var seccion = $('#seccion').val();
  var codigo = $('#codigo').val();
  //var fecha_cierre = $('#fecha_cierre').val();
  var selec2 = $.parseJSON(seleccionados);
  var count_selec = selec2.length;
if(!seccion || !codigo || /**!fecha_cierre ||**/ count_selec == 0){
  swal('Atencion!','Todos los campos y al menos una seleccion son obligatorios','warning');
}else{

      $.ajax({
        url:"/crea_toma_medida",
        headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        method: 'POST',
        data:{ids:seleccionados,sec:seccion,cod:codigo/**,f_c:fecha_cierre**/},
        success: function(data){
          if(data=="ok"){
            swal('Registro Exitoso!','La activacion de Toma de Medida a sido satisfactoria','success').then(function () {
              swal({
                title: "CODIGO ACCESO: "+codigo+"",
                //text: "",
                html: '<p>Recuerda que con este codigo y el RUT tus empleados pueden acceder y subir sus medidas.</p>'
                //html: $('<a href="">')
                //    .addClass('some-class')
                //    .text('Ver Pedidos y Medidas .')

              }).then(function () { window.location='/empresa/pedidos_medidas'; });

            });

          }
          if(data=="nok"){
            swal('Error!','el CODIGO ingresado esta en uso','error').then(function () { location.reload(); });
          }
        }});
      }
}

function trae_seleccionados(){
  var ids_empleados = [];
  $("#tabla-empleados tbody tr").each(function (index) {
    if($(this).hasClass('selected')) {
    ids_empleados.push($(this).children(".id_empleado").text());
    }
  });
  return JSON.stringify(ids_empleados);
}

function generar_codigo(){

  var caracteres = "123456789ABCDEFGH#";
  var longitud = 6;
  var codigo = rand_code(caracteres, longitud);
  $.ajax({
    url:"/verifica_codigo",
    headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
    method: 'POST',
    data:{cod:codigo},
    success: function(data){
      if(data==0){
      $("#codigo").val(codigo);

      }
      if(data>0){
          generar_codigo();
      }
    }});
}

function crear_pedido(){
  var id_toma = $('#id_toma').val();
  var orden_compra = $('#orden_compra').val();
  $.colorbox.close();
  swal({
  title: '¿Estas seguro?',
  text: "Los datos de la toma de medidas seran enviados a Fouche como un Pedido",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Enviar',
  cancelButtonText: 'Cancelar'
  }).then(function() {
  $.ajax({
  url:'/crea_pedido',
  headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
  method: 'POST',
  data:{id_toma:id_toma,orden:orden_compra},
  success: function(data){
    if(data=="error"){
      swal('Ops!','No se ha realizado el pedido, favor contactar al administrador','warning');

    }
    if(data=="ok"){
      swal('Enviado!','La solicitud de pedido ha sido enviada con exito!','success');

      location.reload();
    }
  }});

  });

}

function rand_code(chars, lon){
  var code = "";
  for (x=0; x < lon; x++)
  {
  rand = Math.floor(Math.random()*chars.length);
  code += chars.substr(rand, 1);
  }
  return code;
}

function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');

    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();

    // Formatear RUN
    rut.value = cuerpo + '-'+ dv

    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}

    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;

    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {

        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);

        // Sumar al Contador General
        suma = suma + index;

        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }

    }

    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);

    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;

    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }

    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}


function imprSelec(muestra)
{
  var ficha=document.getElementById(muestra);
  var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
}


function envia_credenciales_empresa(id_empresa)
{
  $.ajax({
  url:'/credenciales_a_empresa',
  headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
  method: 'POST',
  data:{id:id_empresa},
  success: function(data){
    if(data=="error"){
      swal('Ops!','No se ha podido enviar el correo, intente mas tarde','warning');
    }
    if(data=="ok"){
      swal('Enviado!','Las credenciales han sido enviadas con exito!','success');
    }
  }});
}

function editar_corte(id_corte)
{

  var id_corte_arr = id_corte.split("-");
  var id1= id_corte_arr[0];
  var id2= id_corte_arr[1];
  var id3= id_corte_arr[2];

  var id_td = id1+"-"+id2+"-td";
  var id_input = id1+"-"+id2+'-input';

  var contenido_fila = $("#"+id_corte).text();


  $("#"+id_td).html('<input type="text" id="'+id_input+'" value="'+contenido_fila+'" onblur="guardar_datos_corte(\''+id_corte+'\',\''+id_td+'\',\''+id_input+'\');">');
  //alert(contenido_fila);

}

function guardar_datos_corte(id_corte,id_td,id_input)
{
  var contenido_nuevo = $('#'+id_input).val();
  var a_html ='<a id="'+id_corte+'" href="javascript:editar_corte(\''+id_corte+'\')" title="clic para editar" data-toggle="tooltip" data-placement="top" >'+contenido_nuevo+'</a>';
  $("#"+id_td).html(a_html);

  $.ajax({
  url:'/edita_m_corte_unico',
  headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
  method: 'POST',
  data:{id:id_corte,cont:contenido_nuevo},
  success: function(data){

    if(data=="error"){
      console.log("Dato no se ha guardado!");
    }
    if(data=="ok"){
      console.log("Dato guardado con exito!");
    }


  }});
}

function cambia_estado(id_compostura,estado)
{
  swal({
  title: '¿Estas seguro?',
  text: "Se cambiara el estado de la solicitud",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Cambiar',
  cancelButtonText: 'Cancelar'
}).then(function() {

  $.ajax({
  url:'/cambia_estado_compostura',
  headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
  method: 'POST',
  data:{id:id_compostura,estado:estado},
  success: function(data){

console.log(data);

    if(data=="error"){
      swal('Ops!','No se puede cambiar el estado, favor contactar al administrador','warning');
    }
    if(data=="ok"){
      swal('Estado Cambiado!','El estado se ha cambiado con exito','success');
      location.reload();
    }

  }});

});


}

function cambia_estado_admin(id_compostura,estado)
{
  swal({
  title: '¿Estas seguro?',
  text: "Se cambiara el estado de la solicitud",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Cambiar',
  cancelButtonText: 'Cancelar'
}).then(function() {

  $.ajax({
  url:'/cambia_estado_compostura_admin',
  headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
  method: 'POST',
  data:{id:id_compostura,estado:estado},
  success: function(data){

console.log(data);

    if(data=="error"){
      swal('Ops!','No se puede cambiar el estado, favor contactar al administrador','warning');
    }
    if(data=="ok"){
      swal('Estado Cambiado!','El estado se ha cambiado con exito','success');
      location.reload();
    }

  }});

});


}

    </script>
</head>
<body>


    <div id="wrapper">
    @include('layouts.controls')

        <div id="page-wrapper">

            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
</body>
<script type="text/javascript">

</script>
</html>
