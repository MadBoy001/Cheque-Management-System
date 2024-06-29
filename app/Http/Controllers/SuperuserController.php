<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperuserController extends Controller
{
    public function dashboard()
    {
        return view('superuser.dashboard');
    }
}
