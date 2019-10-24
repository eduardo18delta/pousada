<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\textohome;

class SiteController extends Controller
{
    public function chamaHome()
    {
    	return view('site.home.index');
    }

    public function listaTextos()
    {    
    $texto1 = textohome::where('id' , 1)->get();
    $texto2 = textohome::where('id' , 2)->get();
    $texto3 = textohome::where('id' , 3)->get();
    return view('site.home.index' , compact('texto1' , 'texto2' , 'texto3'));       
    }
}
