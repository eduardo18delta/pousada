<?php

# Rotas Públicas
Route::get('/' , 'Site\siteController@index')->name('home');

# Rotas Administrativas
Route::group(['middleware' => ['auth'], 'namespace' => 'Painel' ] , function(){
	Route::get('/painel', 'painelController@index')->name('painel.home');
	Route::get('/painel/perfil', 'painelController@chamaPerfil')->name('painel.perfil');
	Route::get('/painel/senha', 'painelController@chamaSenha')->name('painel.senha');
});

# Rotas Autenticadas
Auth::routes();

