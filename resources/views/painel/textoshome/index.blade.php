@extends('adminlte::page')

@section('title', 'Painel - Marimalde')

@section('content_header')
    <h1>Listagem da home:</h1>
@stop

@section('content')
 
<div class="container-fluid">

    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/painel">Painel</a></li>                
                <li class="breadcrumb-item active" aria-current="page">Textos</li>              
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

    <div class="row">
    	<table class="table table table-striped table-bordered">
    		<thead>
	    		<th>Título:</th>
    			<th>Descrição:</th>
    			<th>Ações:</th>
    		</thead>
    		<tbody> 	
	    		@foreach($textos as $texto)
    				<tr>
	        			<td>{{$texto->titulo}}</td>
        				<td>{{$texto->descricao}}</td>  
        				<td><a href="textoshome/{{$texto->id}}/editar" class="btn btn-success">Editar</a></td>  
        			</tr>
    			@endforeach
    		</tbody>
    	</table>
    </div>

    <div class="row">
        <small>Não é permitido adicionar novos textos, pois o template da home aceita somente três.</small>   
    </div>
</div>


@stop


