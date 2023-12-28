<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function home()
    {
        return view('user.dashboard.home');
    }

    public function hives()
    {
        return view('user.dashboard.hives');
    }

    public function inspection()
    {
        return view('user.dashboard.inspection');
    }
}