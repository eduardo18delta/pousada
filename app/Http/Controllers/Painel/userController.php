<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function updatePerfil(Request $request)
    {
    	#dd($request->all());
    	$data   = $request->all();
    	$update = auth()->user()->update($data);

    	if ($update)
    		return redirect()
    					->route('painel.perfil')
    					->with('success' , 'Sucesso ao atualizar!');  
    		return redirect()
    					->back()
    					->with('success' , 'Falha ao atualizar perfil!');    	
    }

    public function updateSenha(Request $request)    
    {
    	#dd($request->all());    	
    	$data = $request->all();  	

    	if ($data['password_1'] == $data['password_2']){
    		$data['password'] = bcrypt($data['password_1']);
    		$update = auth()->user()->update($data);
    	} else  
    		return redirect()
    					->back()
    					->with('error' , 'Falha ao atualizar perfil, senhas não coincidem!'); 

    	if ($update){
    		return redirect()
    					->route('painel.senha')
    					->with('success' , 'Sucesso ao atualizar!');  
    	} else{
    		return redirect()
    					->back()
    					->with('error' , 'Falha ao atualizar perfil!');    	
    	}

    }
}
