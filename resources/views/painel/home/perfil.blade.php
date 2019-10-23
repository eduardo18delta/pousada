@extends('adminlte::page')

@section('title', 'Seu perfil')

@section('content_header')
    <h1>Perfil do Usuário:</h1>
@stop

@section('content')
<div class="container-fluid">	
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Painel</a></li>                
                <li class="breadcrumb-item active" aria-current="page">Perfil</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success')}}</div>
        @endif
    </div>  

    <div class="row">
        <div class="col-md-12">    	
            <form action="/atualizar-perfil" method="post" enctype="multipart/form-data"> 
            {{ csrf_field() }} 
            <div class="form-group">    	
                <label>Nome:</label>
                <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}">  
            </div>  	    			    
            <div class="form-group">    	
                <label>Email:</label>
                <input class="form-control" type="email" name="email" value="{{Auth::user()->email}}" disabled="">  	 
                <small>Mudanças de email só podem ser efetuadas pelo administrador. Entre em contato <a href="#">aqui</a></small>   
            </div>  	            
            <div class="form-group"> 
                <label>Foto de Perfil:</label>                       
                <input class="form-control" type="file" name="image">       
            </div>  
            <div class="form-group">                         
                <input class="btn btn-success btn-block" type="submit" value="Atualizar Perfil">       
            </div>  
            </form>             
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <small>Informações de registro: </small>	
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <div class="form-group">        
                <label>Data de criação:</label>
                <input class="form-control" type="text" value="{{Auth::user()->created_at}}" disabled="">               
            </div> 
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label>Data de atualização:</label>     
                <input class="form-control" type="text" value="{{Auth::user()->updated_at}}" disabled="">              
            </div>             
        </div>
    </div>
</div>

@stop
