<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckLogin extends Controller
{
    public function checkLog()
{
    return view('auth.login');
}
}