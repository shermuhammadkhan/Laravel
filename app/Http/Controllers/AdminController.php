<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
	function testing($number)
	{
		echo "hello from admin Testing...".$number;
	}

	function get_fom_data(Request $Request)
	{
		$form_data = $Request->first_name;
		dd($form_data);
	}
}


