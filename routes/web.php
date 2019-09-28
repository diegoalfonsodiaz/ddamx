<?php



Route::get('/', function () {
   return view('welcome');
});
Route::get('/', function () {
    return view('admin.dashboard');
});
//Robinson C

/* RUTAS CARGO EJECUTORES -----------------------------------------------------------------------*/
Route::resource('asunto', 'AsuntoController');
//Route::get('/cargoejecutor', 'CargoejecutorController@index');
//Route::get('/cargoejecutor/create', 'CargoejecutorController@create');
Route::resource('cargoejecutor', 'CargoejecutorController');


/* FIN CARGO EJECUTORES  **************************************************************************/
/* RUTAS  EJECUTORES -----------------------------------------------------------------------*/






/* FIN  EJECUTORES  **************************************************************************/
/* RUTAS  OBRA -----------------------------------------------------------------------*/






/* FIN  OBRA  **************************************************************************/
/* RUTAS  PERSONA -----------------------------------------------------------------------*/






/* FIN  PERSONA  **************************************************************************/
/* RUTAS ESTADO FACTIBILIDAD -----------------------------------------------------------------------*/
Route::get('/agregarfacti', function () {
    return view('estadofactibilidad.agregar');
});
Route::get('/estadofactibilidad', 'EstadofactibilidadController@index');
Route::post('/insertarfacti', 'EstadofactibilidadController@create');
Route::get('/actualizarfacti/{id}', 'EstadofactibilidadController@edit');
Route::post('/updatefacti/{id}', 'EstadofactibilidadController@update');
//Route::get('/eliminar/{id}', 'EstadofactibilidadController@eliminar');
//Route::post('/delete/{id}', 'EstadofactibilidadController@destroy');
Route::get('/desactivarfacti/{id}', 'EstadofactibilidadController@desactivar');
Route::post('/deshabilitadofacti/{id}', 'EstadofactibilidadController@deshabilitado');
Route::get('/activarfacti/{id}', 'EstadofactibilidadController@activar');
Route::post('/habilitadofacti/{id}', 'EstadofactibilidadController@habilitado');
Route::get('/detallefacti/{id}', 'EstadofactibilidadController@show');
/* FIN  ESTADO FACTIBILIDAD  **************************************************************************/






/* RUTAS  ESTADO LICENCIA -----------------------------------------------------------------------*/
Route::get('/agregarForm', function () {
    return view('estadolicencia.agregar');
});
Route::get('/estadolicencia', 'EstadolicenciaController@index');
Route::post('/insertar', 'EstadolicenciaController@create');
Route::get('/actualizar/{id}', 'EstadolicenciaController@edit');
Route::post('/update/{id}', 'EstadolicenciaController@update');
Route::get('/eliminar/{id}', 'EstadolicenciaController@eliminar');
Route::post('/delete/{id}', 'EstadolicenciaController@destroy');
Route::get('/detalle/{id}', 'EstadolicenciaController@show');




















/* FIN  LICENCIA   **************************************************************************/
