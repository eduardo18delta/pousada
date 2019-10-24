<?php

# Rotas da home
Route::get('/' , 'Site\SiteController@chamaHome')->name('home');
Route::get('/' , 'Site\SiteController@listaTextos');	
# Nova rota de Logout
Route::get('/logout', 'LoginController@logout');
# Rotas Autenticadas
Auth::routes();

# Rotas Administrativas
Route::group(['middleware' => ['auth'], 'namespace' => 'Painel' ] , function(){
	Route::get('/painel', 'PainelController@index')->name('painel.home');
	Route::get('/painel/perfil', 'PainelController@chamaPerfil')->name('painel.perfil');
	Route::get('/painel/senha',  'PainelController@chamaSenha')->name('painel.senha');	
	Route::post('/atualizar-perfil' , 'UserController@updatePerfil')->name('perfil.update');
	Route::post('/atualizar-senha'  , 'UserController@updateSenha')->name('senha.update');
	
	# Crud dos Textos da Home
	Route::get('painel/textoshome', 'TextoshomeController@index');
	Route::get('painel/textoshome/{id}/editar', 'TextoshomeController@edit');

	



});





// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    
//     Route::get('projetos/inserir', 'ProjetosController@getInserir');
//     Route::post('projetos/inserir', 'ProjetosController@postInserir');
//     Route::get('projetos/editar/{id}', 'ProjetosController@getEditar');
//     Route::post('projetos/editar/{id}', 'ProjetosController@postEditar');
//     Route::post('projetos/deletar/{id}', 'ProjetosController@postDeletar');






	



