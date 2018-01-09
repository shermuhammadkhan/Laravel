<?php

namespace App\Http\Controllers\templating;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Template_cont extends Controller
{
    
	public function index()
	{
		return view('templating.child_view')->with('data','Hello world this is laravel 5.5 latest version and this is BLADE Templating of laravel!!!!...');
	}

}
