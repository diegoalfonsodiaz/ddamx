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






/* FIN  ESTADO FACTIBILIDAD  **************************************************************************/
/* RUTAS  ESTADO LICENCIA -----------------------------------------------------------------------*/






/* FIN  LICENCIA   **************************************************************************/