<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Admin extends Controller
{


	public function __construct()
    {
        $this->middleware('auth:admins');
    }
    
	public function index()
	{
		return view('admin.dashboard');
	}


}
