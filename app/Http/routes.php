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

//Rotas que só podem ser visitadas caso o usuário não esteja logado.
    Route::group(['middleware' => 'guest'], function()
    {

    	//Rotas de Login
    	Route::get('/', 'Auth\AuthController@getLogin');
		  Route::get('auth/login', 'Auth\AuthController@getLogin');
		  Route::post('auth/login', 'Auth\AuthController@postLogin');

      //Rotas de Cadastro
      Route::get('auth/cadastrar', 'Auth\AuthController@getRegister');
      Route::post('auth/cadastrar', 'Auth\AuthController@postRegister');

    });



Route::group(['prefix' => 'painel', 'as' => 'sistema::', 'middleware' => 'auth'], function()
{	
  Route::get('/', 'PainelController@index');    
  
  //Logout
  Route::get('auth/logout', ['as'=> 'logout', 'uses' => 'Auth\AuthController@getLogout']);
});
