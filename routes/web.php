<?php



Route::get('/', function (){
    return view ('auth.login') ;
});

//Route::get('/menu', function () {
//Route::get('/', function () {
//   return view('welcome');
//});
Route::get('/menu', function () {
    return view('admin.dashboard');
});
//Robinson C


/* RUTAS CARGO EJECUTORES -----------------------------------------------------------------------*/
Route::resource('asunto', 'AsuntoController');
//Route::get('/cargoejecutor', 'CargoejecutorController@index');
//Route::get('/cargoejecutor/create', 'CargoejecutorController@create');
Route::resource('cargoejecutor', 'CargoejecutorController');
Route::resource('ejecutor', 'EjecutorController');
Route::resource('solicitud', 'SolicitudController');
/* FIN CARGO EJECUTORES  **************************************************************************/
/* RUTAS  EJECUTORES -----------------------------------------------------------------------*/
Route::resource('licencia', 'LicenciaController');

Route::post('/solicitud/{id}', 'SolicitudController@show')->name('solicitudes.show');
Route::get('/solicitud/{id}', 'PersonaController@edit')->name('solicitudes.edit');
Route::put('/solicitud/{id}', 'PersonaController@update')->name('solicitudes.update');


/* FIN  EJECUTORES  ***asdf***********************************************************************/
/* RUTAS  OBRA -----------------------------------------------------------------------*/






/* FIN  OBRA  **************************************************************************/
/* RUTAS  PERSONA -----------------------------------------------------------------------*/






/* FIN  PERSONA  **************************************************************************/
/* RUTAS ESTADO FACTIBILIDAD -----------------------------------------------------------------------*/
Route::resource('estadofactibilidad', 'EstadofactibilidadController');
Route::post('/estadofactibilidad/{estadofactibilidad}', 'EstadofactibilidadController@desactivar')->name('estadofactibilidades.desactivar');
Route::delete('/estadofactibilidad/{estadofactibilidad}', 'EstadofactibilidadController@activar')->name('estadofactibilidades.activar');











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
Route::post('/estadolicencia/{estadolicencia}', 'EstadolicenciaController@desactivar')->name('estadolicencias.desactivar');
Route::delete('/estadolicencia/{estadolicencia}', 'EstadolicenciaController@activar')->name('estadolicencias.activar');




















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
Route::get('/desactivartipovia/{id}', 'TipoviaController@desactivar');
Route::post('/deshabilitadotipovia/{id}', 'TipoviaController@deshabilitado');
Route::get('/activartipovia/{id}', 'TipoviaController@activar');
Route::post('/habilitadotipovia/{id}', 'TipoviaController@habilitado');
Route::post('/tipovia/{tipovia}', 'TipoviaController@desactivar')->name('tipovias.desactivar');
Route::delete('/tipovia/{tipovia}', 'TipoviaController@activar')->name('tipovias.activar');



/* FIN tipovia   **************************************************************************/






/* RUTAS  TIPO DE OBRA -----------------------------------------------------------------------*/
//Route::get('/tipoobra','TipoobraController@index');
Route::resource('tipoobra', 'TipoobraController');
Route::get('/desactivar/{id}', 'TipoobraController@desactivar');
Route::post('/deshabilitado/{id}', 'TipoobraController@deshabilitado');
Route::get('/activar/{id}', 'TipoobraController@activar');
Route::post('/habilitado/{id}', 'TipoobraController@habilitado');
/* FIN  TIPO DE OBRA   **************************************************************************/
Route::get('/persona','PersonaController@index')->name('personas.index');
Route::get('/persona/create','PersonaController@create')->name('personas.create');
Route::post('/persona','PersonaController@store')->name('personas.store');
Route::get('/persona/{persona}', 'PersonaController@edit')->name('personas.edit');
Route::put('/persona/{persona}', 'PersonaController@update')->name('personas.update');
Route::post('/persona/{persona}', 'PersonaController@desactivar')->name('personas.desactivar');
Route::delete('/persona/{persona}', 'PersonaController@activar')->name('personas.activar');


Route::get('/estadodenuncia','EstadodenunciaController@index')->name('estadodenuncias.index');
Route::get('/estadodenuncia/create','EstadodenunciaController@create')->name('estadodenuncias.create');
Route::post('/estadodenuncia','EstadodenunciaController@store')->name('estadodenuncias.store');
Route::get('/estadodenuncia/{estadodenuncia}', 'EstadodenunciaController@edit')->name('estadodenuncias.edit');
Route::put('/estadodenuncia/{estadodenuncia}', 'EstadodenunciaController@update')->name('estadodenuncias.update');
Route::post('/estadodenuncia/{estadodenuncia}', 'EstadodenunciaController@desactivar')->name('estadodenuncias.desactivar');
Route::delete('/estadodenuncia/{estadodenuncia}', 'EstadodenunciaController@activar')->name('estadodenuncias.activar');



Route::resource('denuncia', 'DenunciaController');
Auth::routes(['register' => false]);

Route::resource('bitacora', 'BitacoraController');

Route::resource('usuario', 'UserController');
Route::post('/usuario/{usuario}', 'UserController@desactivar')->name('usuarios.desactivar');
Route::delete('/usuario/{usuario}', 'UserController@activar')->name('usuarios.activar');


Route::resource('asignacion', 'AsignacionController');
Route::post('/asignacion/{id}', 'AsignacionController@destroy')->name('asignaciones.destroy');


Route::resource('rol', 'RolController');

//Nueva Rama Robinson
