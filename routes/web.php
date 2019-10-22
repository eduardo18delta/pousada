<?php

# Rotas Públicas
Route::get('/' , 'Site\siteController@index')->name('home');

# Rotas Administrativas
Route::group(['middleware' => ['auth'], 'namespace' => 'Painel' ] , function(){
	Route::get('/painel', 'painelController@index')->name('painel.home');
});

# Rotas Autenticadas
Auth::routes();

