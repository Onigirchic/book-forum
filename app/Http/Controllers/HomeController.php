<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{

    public function index()
    {
        return view("home");
    }

    public function news1()
    {
        return view("news1");
    }

    public function news2()
    {
        return view("news2");
    }

    public function news3()
    {
        return view("news3");
    }

}
