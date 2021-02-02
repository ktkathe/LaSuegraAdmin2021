<?php

use Illuminate\Http\Request;
use App\Events\FormQr;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('foo/{id}', function () {
//     $text =request()->id;

//     event(new FormQr($text));
// });


    Route::get('foo/{id}','DatosController@show')->name('foo');
    Route::Resource('notificaciones','PromoController');


 

    // Route::get('foo/{id}','DatosController@show');
    

//  Route::resource('foo', 'DatosController@index');
