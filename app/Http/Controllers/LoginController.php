<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function auth(Request $request)
    {
        dd($request);
    }
}
