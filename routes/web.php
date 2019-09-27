<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('admin.dashboard');
});

/* RUTAS CARGO EJECUTORES -----------------------------------------------------------------------*/






/* FIN CARGO EJECUTORES  **************************************************************************/
/* RUTAS  EJECUTORES -----------------------------------------------------------------------*/






/* FIN  EJECUTORES  **************************************************************************/
/* RUTAS  OBRA -----------------------------------------------------------------------*/






/* FIN  OBRA  **************************************************************************/
/* RUTAS  PERSONA -----------------------------------------------------------------------*/






/* FIN  PERSONA  **************************************************************************/
/* RUTAS ESTADO FACTIBILIDAD -----------------------------------------------------------------------*/
Route::get('/agregarForm', function () {
    return view('estadofactibilidad.agregar');
});
Route::get('/estadofactibilidad', 'EstadofactibilidadController@index');
Route::post('/insertar', 'EstadofactibilidadController@create');
Route::get('/actualizar/{id}', 'EstadofactibilidadController@edit');
Route::post('/update/{id}', 'EstadofactibilidadController@update');
//Route::get('/eliminar/{id}', 'EstadofactibilidadController@eliminar');
//Route::post('/delete/{id}', 'EstadofactibilidadController@destroy');
Route::get('/desactivar/{id}', 'EstadofactibilidadController@desactivar');
Route::post('/deshabilitado/{id}', 'EstadofactibilidadController@deshabilitado');
Route::get('/activar/{id}', 'EstadofactibilidadController@activar');
Route::post('/habilitado/{id}', 'EstadofactibilidadController@habilitado');
Route::get('/detalle/{id}', 'EstadofactibilidadController@show');
/* FIN  ESTADO FACTIBILIDAD  **************************************************************************/
/* RUTAS  ESTADO LICENCIA -----------------------------------------------------------------------*/






/* FIN  LICENCIA   **************************************************************************/