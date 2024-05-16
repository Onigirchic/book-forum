<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inform;

class InformController extends Controller
{
    public function index(Request $request)
    {

        $title = 'Информация';
        return view("inform", compact('title'));

    }
}
