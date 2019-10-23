<?php

# Rotas Públicas
Route::get('/' , 'Site\siteController@index')->name('home');

# Rotas Administrativas
Route::group(['middleware' => ['auth'], 'namespace' => 'Painel' ] , function(){
	Route::get('/painel', 'painelController@index')->name('painel.home');
	Route::get('/painel/perfil', 'painelController@chamaPerfil')->name('painel.perfil');
	Route::get('/painel/senha', 'painelController@chamaSenha')->name('painel.senha');	
});

# Nova rota de Logout
Route::get('/logout', 'LoginController@logout');	
# Rotas de atualização do perfil
Route::post('/atualizar-perfil' , 'Painel\userController@updatePerfil')->name('perfil.update')->middleware('auth');
Route::post('/atualizar-senha'  , 'Painel\userController@updateSenha')->name('senha.update')->middleware('auth');

# Rotas Autenticadas
Auth::routes();

