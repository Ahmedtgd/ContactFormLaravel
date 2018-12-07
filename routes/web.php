<?php

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
});
Route::get('/contact',[                          // when user request /contact he will be sent to creat method in contactmessagecontroller file
  'uses' => 'ContactMessageController@create'
] );

Route::post('/contact',[
'uses' => 'ContactMessageController@store',
  'as' =>'contact.store'

] );
