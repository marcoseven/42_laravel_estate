<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('houses', 'HouseController@index')->name('houses');
Route::get('houses/{house}', 'HouseController@show')->name('house');


/*
Model: House
Controller : HouseController
Migration: houses
- id
- address
- city
- post_code
- rooms
- square_meters
- for_sale
- to_let
- is_available

Routes:
- houses
- houses/1

*/
