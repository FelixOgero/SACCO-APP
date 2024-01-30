<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard(Request $request) {
        return view("welcome");
    }

    public function reset()
    {
        return view('passwordReset');
    }
}
