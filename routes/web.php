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






/* FIN  ESTADO FACTIBILIDAD  **************************************************************************/
/* RUTAS  ESTADO LICENCIA -----------------------------------------------------------------------*/






/* FIN  LICENCIA   **************************************************************************/
/* RUTAS  TIPO DE OBRA -----------------------------------------------------------------------*/
//Route::get('/tipoobra','TipoobraController@index');
Route::resource('tipoobra', 'TipoobraController');
Route::get('/desactivar/{id}', 'TipoobraController@desactivar');
Route::post('/deshabilitado/{id}', 'TipoobraController@deshabilitado');
Route::get('/activar/{id}', 'TipoobraController@activar');
Route::post('/habilitado/{id}', 'TipoobraController@habilitado');
/* FIN  TIPO DE OBRA   **************************************************************************/