<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FollowController;
use App\Models\Follow;

class AccountController extends Controller
{
    public function index()
    {
        $follow = Follow::all();
        return view("account", compact('follow'));
    }
}
