@extends('adminlte::page')

@section('title', 'Painel - Marimalde')

@section('content_header')
    <h1>Edição:</h1>
@stop

@section('content')
 
<div class="container-fluid">
	<div class="row">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success')}}</div>
        @endif
    </div>  

    <div class="row">
        <div class="col-md-12">    	
            <form action="/atualizar-texto" method="post"> 
            {{ csrf_field() }} 
            <div class="form-group">    	
                <label>Título:</label>
                <input class="form-control" type="text" name="name" value="{{$textos['titulo']}}">  
            </div>  	    			    
  			<div class="form-group">
    		<label>Example textarea</label>
    			<textarea class="form-control" rows="5">
    				{{$textos['descricao']}}
    			</textarea>
  			</div> 	            
            <div class="form-group">                         
                <input class="btn btn-success btn-block" type="submit" value="Atualizar Texto">       
            </div>  
            </form>             
        </div>
    </div>
</div>


@stop


