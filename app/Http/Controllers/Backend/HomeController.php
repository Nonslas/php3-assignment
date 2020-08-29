<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	function __construct()
    {
    	$this->middleware('auth');
    }

    public function index(Request $request)
    {
    	return view('backend.dashboard');
    }
}
