<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('dashboards.user.index');
    }

    function profile(){
        return view('dashboards.user.profile');
    }

    function settings(){
        return view('dashboards.user.settings');
    }

}
