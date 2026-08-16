<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //public vienw for index page
    public function index()
    {
        return view('index');
    }

    //private view for dashboard page
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
