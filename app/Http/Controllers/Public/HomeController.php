<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //public view for index page
    public function index()
    {
        return view('public.index');
    }
}
