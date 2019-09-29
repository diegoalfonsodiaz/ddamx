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






/* RUTAS  tipovia -----------------------------------------------------------------------*/
//Pruebas tbl_tipovia
Route::get('/agregartipovia', function () {
    return view('tipovia.agregar');
});
Route::get('/tipovia', 'TipoviaController@index');
Route::post('/insertartipovia', 'TipoviaController@create');
Route::get('/actualizartipovia/{id}', 'TipoviaController@edit');
Route::post('/updatetipovia/{id}', 'TipoviaController@update');
//Route::get('/eliminartipovia/{id}', 'TipoviaController@eliminar');
//Route::post('/deletetipovia/{id}', 'TipoviaController@destroy');
Route::get('/desactivartipovia/{id}', 'TipoviaController@desactivar');
Route::post('/deshabilitadotipovia/{id}', 'TipoviaController@deshabilitado');
Route::get('/activartipovia/{id}', 'TipoviaController@activar');
Route::post('/habilitadotipovia/{id}', 'TipoviaController@habilitado');



/* FIN tipovia   **************************************************************************/






