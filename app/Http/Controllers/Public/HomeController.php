<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class HomeController extends Controller
{
    //public view for index page
    public function index()
    {
        $products = Product::with(['category', 'brand'])->paginate(12);

        return view('public.index', compact('products'));
    }
}
