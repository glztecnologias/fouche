<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*--------------------------------------------------------------------------
| PUBLICOS
|--------------------------------------------------------------------------*/

Route::get('/', function () {
  return redirect('/auth/login');
});

// Authentication routes...
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

//RUTEOS CONSULTAS ASINCRONICAS (AJAX)

/*--------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------
| EMPLEADOS
|--------------------------------------------------------------------------*/
//Route::get('/toma_de_medida/{rut}/{codigo}', 'EmpleadoController@index');
Route::post('/toma_de_medida', 'EmpleadoController@index');

Route::post('/toma_de_medida/guardar', 'EmpleadoController@guardar_medidas');
//RUTEOS CONSULTAS ASINCRONICAS (AJAX)


/*--------------------------------------------------------------------------*/
Route::group(['middleware' => 'auth'], function () {

  /*--------------------------------------------------------------------------
  | EMPRESAS
  |--------------------------------------------------------------------------*/
  Route::group(['middleware' => 'empresa'], function () {
    Route::get('/empresa', 'EmpresaController@index');
  //Rutas Empleados

    Route::get('/empresa/empleados','EmpresaController@empleados');
    Route::get('/nuevo_empleado', 'EmpresaController@nuevo_empleado'); //formulario crear empleado crear_empleado
    Route::get('/sube_multiple', 'EmpresaController@multiple_empleado'); //formulario crear empleado crear_empleado
//http://www.maatwebsite.nl/laravel-excel/docs

//http://itsolutionstuff.com/post/laravel-5-import-export-to-excel-and-csv-using-maatwebsite-exampleexample.html
//http://www.dunebook.com/import-and-export-excel-and-csv-files-in-laravel-5-1/
//https://styde.net/importar-datos-desde-excel-o-csv-a-laravel/


    Route::resource('/empresa/empleados/nuevo','EmpresaController@crear_empleado');  //Crea nuevo Empleado
    Route::post('/elimina_empleado', 'EmpresaController@elimina_empleado'); //Elimina Empleado
    Route::get('/edita_empleado/{id}', 'EmpresaController@edita_empleado'); //formulario editar empleado
    Route::post('/actualiza_empleado/{id}', 'EmpresaController@actualiza_empleado'); //Actualiza empleado
    Route::post('/verifica_codigo', 'EmpresaController@verifica_codigo'); //Verifica Codigo de Toma de Medida. crea_toma_medida
    Route::post('/crea_toma_medida', 'EmpresaController@crea_toma_medida');

    Route::post('/importExcel', 'ExcelController@importExcel');


  //Rutas Pedidos & Medidas
    Route::get('/empresa/pedidos_medidas','EmpresaController@pedidos_medidas');
    Route::get('/detalle_toma_medida/{id}','EmpresaController@ver_detalle_toma_medida');
    Route::get('/edita_toma_medida/{id}','EmpresaController@edita_toma_medida');
    Route::post('/actualiza_toma_medida','EmpresaController@actualiza_toma_medida');
    Route::post('/elimina_toma_medida','EmpresaController@elimina_toma_medida');

    Route::get('/toma_a_pedido/{id}','EmpresaController@toma_a_pedido');
    Route::post('/crea_pedido','EmpresaController@crea_pedido');



    //Pedidos
    Route::get('/detalle_pedido/{id}','EmpresaController@ver_detalle_pedido');
    Route::get('/solicitud_compostura/{id}','EmpresaController@hacer_compostura');
    Route::post('/crea_compostura','EmpresaController@crea_compostura');


    //Composturas
    Route::get('/empresa/composturas','EmpresaController@lista_composturas');

  //Rutas Cuenta
    Route::get('/empresa/cuenta','EmpresaController@cuenta');
    Route::post('/actualiza_cuenta','EmpresaController@actualiza_cuenta');
    Route::get('/trae_form_password','EmpresaController@trae_form_password');
    Route::post('/actualiza_password','EmpresaController@actualiza_password');


  });


  //RUTEOS CONSULTAS ASINCRONICAS (AJAX)


  /*--------------------------------------------------------------------------*/

  /*--------------------------------------------------------------------------
  | ADMINISTRACION
  |--------------------------------------------------------------------------*/
  Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin','AdminController@index');
//Rutas Empresas
    Route::get('/admin/empresas', 'AdminController@empresas'); //seccion y lista
      Route::get('/nueva_empresa', 'AdminController@nueva_empresa'); //formulario crear empresa
      Route::resource('/admin/empresas/nueva', 'AdminController@crea_empresa'); //crea nueva empresa
      Route::get('/admin/empresas/{id}/{estado}', 'AdminController@cambia_estado_empresa'); //activar o desactivar
      Route::post('/elimina_empresa', 'AdminController@elimina_empresa');
      Route::get('/edita_empresa/{id}', 'AdminController@edita_empresa'); //formulario editar empresa
      Route::post('/actualiza_empresa/{id}', 'AdminController@actualiza_empresa'); //Actualiza empresa

//Rutas Pedidos
    Route::get('/admin/pedidos', 'AdminController@pedidos');
    Route::get('/admin/pedidos/{id}', 'AdminController@trae_detalle_pedido');
    Route::get('/ficha/{id_empleado}/toma/{id_toma}', 'AdminController@trae_ficha');

//Rutas Composturas
    Route::get('/admin/composturas','AdminController@composturas');
//Rutas Cuenta
    Route::get('/admin/cuenta', 'AdminController@cuenta');

  });
});


//RUTEOS CONSULTAS ASINCRONICAS (AJAX)

/*--------------------------------------------------------------------------*/
