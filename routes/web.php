<?php


use Illuminate\Support\Facades\Route;
Auth::routes();

//cargar datos Notificaiones
// Route::get('api/v1/notificaciones{id}','PromoController@getNotificaciones');
// Route::get('foo1/{id}','PromoController@getNotificaciones')->name('foo1');

//datos nuestros amigos
Route::get('/subirNuestros', 'NuestrosController@index')->name('subirNuestros');
Route::resource('nuestros1','NuestrosController');

//grupo
Route::resource('grupo1','GrupoController');
Route::resource('grupo2','Grupo1Controller');


//datos de suegreros
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/nose', 'HomeController@editar')->name('nose');
Route::post('/home','HomeController@eliminar')->name('usuarios');
Route::resource('usuarios1','HomeController');
//login
Route::get('/','InicioController@index')->name('inicio');

//registrar promos
Route::resource('promo','PromoController');
Route::resource('promo1','Promo1Controller');

//seleccionar nacionalidad
Route::resource('promoP','DescuentoController');
Route::resource('promoP1','Descuento1Controller');

//crear pro grupos
Route::resource('promoPG','DescuentoPGController');
Route::resource('promoPG1','DescuentoPG1Controller');


//registrar descuentos
Route::get('/descuentos', 'DescuentoController@index')->name('descuentos');
Route::get('/descuentos1', 'DescuentoController@index1')->name('descuentos1');

//registrar descuentos
Route::get('/descuentosP', 'DescuentoController@indexP')->name('descuentosP');
Route::get('/descuentosP1', 'DescuentoController@indexP1')->name('descuentosP1');

//registrar grupo descuentos
Route::get('/descuentosPG', 'DescuentoController@indexPG')->name('descuentosPG');
Route::get('/descuentosPG1', 'DescuentoController@indexPG1')->name('descuentosPG1');



//crear grupo
Route::get('/crearp', 'GrupoController@index')->name('crearp');
Route::get('/crearp1', 'GrupoController@index1')->name('crearp1');


Route::get('/form', ['as' => 'form', 'uses' => 'DescuentoController@index']);
Route::get('imagenesPromos/{id}', 'DescuentoController@promos');

Route::get('/form', ['as' => 'form', 'uses' => 'DescuentoController@index1']);
Route::get('imagenesPromos/{id}', 'DescuentoController@promos1');


//subir imagen decuento
Route::get('/subir', 'SubirController@index')->name('subir');
Route::get('/subir1', 'SubirController@index1')->name('subir1');

Route::resource('subirPromo','SubirController');
Route::resource('subirPromo1','Subir1Controller');

//crear sitios
Route::get('/sitios', 'SitiosController@index')->name('sitios');
Route::get('/datos', 'DatosController@index')->name('datos');
Route::get('/ciudad', 'HomeController@consultar')->name('ciudad');
Route::resource('sitiosCrear','SitiosController');
//IONIC
Route::get('/counter', function () {
    return view('datos.index');
});

Route::get('editarQr/{id}/{ids}','DatosController@showUsarQr')->name('editarQr');
Route::get('consultarCumpleanos/{id}','DatosController@showUsarQr1')->name('consultarCumpleanos');
Route::get('usarPromoCumple/{id}','DatosController@UsarPromoCumple')->name('usarPromoCumple');

Route::get('eliminarUsuario/{id}','HomeController@eliminar')->name('eliminarUsuario');
Route::get('editarUsuario/{id}','HomeController@show')->name('editarUsuario');
Route::get('editarUsuarioPlatino/{id}','HomeController@platino')->name('editarUsuarioPlatino');
Route::get('editarUsuarioBlue/{id}','HomeController@blue')->name('editarUsuarioBlue');

Route::get('verUsuario/{id}','HomeController@showUsuario')->name('verUsuario');



Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/login', 'Seguridad\LoginController@logout')->name('login_logout');

//Route::get('','Admin\AdminController@index');
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//Route::get('', 'Admin/AdminController@index');
//});



