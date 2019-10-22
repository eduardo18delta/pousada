<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class painelController extends Controller
{
    public function index()
    {
    	return view('painel.home.index');
    }
}
