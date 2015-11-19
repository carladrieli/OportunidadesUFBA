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
  //Route::get('/', 'PainelController@index');
  Route::get('/', ['as' => 'painel', 'uses' => 'PainelController@index']);

  //Usuario
  //Route::get('auth/cadastrar', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);
  //Route::post('auth/cadastrar', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@postRegister']);

  //Curso
  Route::get('/curso', ['as' => 'curso', 'uses' => 'CursoController@index']);
  Route::get('/curso/novoCurso', ['as' => 'curso.novocurso', 'uses' => 'CursoController@create']);
  Route::post('/curso/novoCurso', ['as' => 'curso.novocurso', 'uses' => 'CursoController@store']);
  Route::get('/curso/editarCurso/{id}', ['as' => 'curso.editarcurso', 'uses' => 'CursoController@edit']);
  Route::post('/curso/editarCurso/{id}', ['as' => 'curso.editarcurso', 'uses' => 'CursoController@update']);
  Route::get('/curso/excluirCurso/{id}', ['as' => 'curso.excluircurso', 'uses' => 'CursoController@destroy']);

  //Oportunidade
  Route::get('/oportunidade', ['as' => 'oportunidade', 'uses' => 'Oportunidade\OportunidadeController@index']);
  Route::get('/oportunidade/novaOportunidade', ['as' => 'oportunidade.novaoportunidade', 'uses' => 'Oportunidade\OportunidadeController@create']);
  Route::post('/oportunidade/novaOportunidade', ['as' => 'oportunidade.novaoportunidade', 'uses' => 'Oportunidade\OportunidadeController@store']);
  Route::get('/oportunidade/editarOportunidade/{id}', ['as' => 'oportunidade.editaroportunidade', 'uses' => 'Oportunidade\OportunidadeController@edit']);
  Route::post('/oportunidade/editarOportunidade/{id}', ['as' => 'oportunidade.editaroportunidade', 'uses' => 'Oportunidade\OportunidadeController@update']);
  Route::get('/oportunidade/excluirOportunidade/{id}', ['as' => 'oportunidade.excluiroportunidade', 'uses' => 'Oportunidade\OportunidadeController@destroy']);
  Route::get('/oportunidadeAluno', ['as' => 'oportunidadeAluno', 'uses' => 'Oportunidade\OportunidadeController@index']);
  Route::get('/oportunidadeAluno/candidatar/{id}', ['as' => 'oportunidade.candidataroportunidade', 'uses' => 'Oportunidade\OportunidadeController@candidatar']);

  
 


  //Logout
  Route::get('auth/logout', ['as'=> 'logout', 'uses' => 'Auth\AuthController@getLogout']);
});
