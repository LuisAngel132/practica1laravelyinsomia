<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\example\MyController;
use App\Http\Controllers\example\controlador;

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

Route::post('persona','example\MyController@personas');
Route::get('vpersona','example\MyController@personasvista');
Route::post('producto','example\controlador@producto');
Route::get('vproducto/{persona?}','example\MyController@productosvista');
Route ::put ('apersona/{idpersona}','example\MyController@actualizar')
->where (['idpersona'=>'[0-9]+']);
Route ::put ('aproducto/{idproducto}','example\MyController@actualizarproducto')
->where (['idproducto'=>'[0-9]+']);
Route ::delete ('eproducto/{idproducto}','example\MyController@eliminarproducto')
->where (['idproducto'=>'[0-9]+']);
Route ::delete ('epersona/{idpersona}','example\MyController@eliminarpersona')
->where (['idproducto'=>'[0-9]+']);
