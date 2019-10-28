<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updatePerfil(Request $request)
    {
    	#dd($request->all());
    	$user = auth()->user();
    	$data = $request->all();;

        $attributes = [
          'name' => 'Nome',          
        ];

        $this->validate($request, [
            'name' => 'required|min:4|max:64',            
        ] , [] , $attributes);

    	$data['image'] = $user->image;
    	if ($request->hasFile('image') && $request->file('image')->isValid()){
    		if ($user->image)
    			$name = $user->image;
    		else 
    			$name = $user->id;	

    		$extencao = $request->image->extension();
    		$nameFile  = "{$name}.{$extencao}";
    		$data['image'] = $nameFile;

    		$upload = $request->image->storeAs('users' , $nameFile);

    		if(!$upload)
    			return redirect()
    						->back()
    						->with('error' , 'Falha ao enviar imagem');

    	};

    	$update = $user->update($data);    	

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
