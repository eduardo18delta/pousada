<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index()
    {
    	return view('site.home.index');
    }
}
