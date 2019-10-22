@extends('adminlte::page')

@section('title', 'Seu perfil')

@section('content_header')
    <h1>Troca de Senha:</h1>
@stop

@section('content')
<div class="container-fluid">	
 	<div class="row red">
    	<div class="col-md-12">    					
    		<div class="form-group">    	
    			<label>Senha atual:</label>
    			<input class="form-control" type="text" name="" required="">  	    			
    		</div>  	    			
    		<div class="form-group">    	
    			<label>Nova Senha:</label>
    			<input class="form-control" type="text" name="" required="">  	    			
    		</div>  	    				    				  	
            <div class="form-group">        
                <label>Confirmar nova senha:</label>
                <input class="form-control" type="text" name="" required="">                    
            </div>              
            <div class="form-group">                        
                <input class="btn btn-success btn-block" type="submit" value="Trocar Senha">              
            </div>              
    	</div>
    </div>
</div>

@stop
