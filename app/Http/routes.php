<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//s
Route::group( [ 'middleware' => 'language.pt-br' ] , function(){


      Route::get('/', function () {
          return view('welcome');

      });

      Route::get('/versao', function () {

          return view('teste');
      });
});

Route::group( ['prefix' => 'en' , 'middleware' => 'language.en' ] , function(){

      Route::get('/', function () {
          return view('welcome');
      });

      Route::get('/versao', function () {
          return view('teste');
      });
});
