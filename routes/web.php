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





/* FIN tipovia   **************************************************************************/






