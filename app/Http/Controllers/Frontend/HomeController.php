<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$products = Product::all();

    	return view('frontend.home.index', [
    		'products' => $products
    	]);
    }
}