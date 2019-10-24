<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function index()
    {
    	return view('painel.home.index');
    }

    public function chamaPerfil()
    {
    	return view('painel.home.perfil');
    }

    public function chamaSenha()
    {
    	return view('painel.home.senha');
    }
}
