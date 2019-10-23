@extends('adminlte::page')

@section('title', 'Seu perfil')

@section('content_header')
    <h1>Troca de Senha:</h1>
@stop

@section('content')
<div class="container-fluid">	
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Painel</a></li>                
                <li class="breadcrumb-item active" aria-current="page">Troca de Senha</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success')}}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error')}}</div>
        @endif
    </div>  

 	<div class="row red">
    	<div class="col-md-12">   
            <form action="/atualizar-senha" method="post"> 
            {{ csrf_field() }}  				 	    		
    		<div class="form-group">    	
    			<label>Nova Senha:</label>
    			<input class="form-control" type="text" name="password_1">  	    			
    		</div>  	    				    				  	
            <div class="form-group">        
                <label>Confirmar nova senha:</label>
                <input class="form-control" type="text" name="password_2">                    
            </div>              
            <div class="form-group">                        
                <input class="btn btn-success btn-block" type="submit" value="Trocar Senha">              
            </div>  
            </form>            
    	</div>
    </div>
</div>

@stop
