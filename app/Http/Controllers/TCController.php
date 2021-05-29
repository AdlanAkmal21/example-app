<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TCController extends Controller
{
    public function dashboard_tc()
    {
        return view('dashboard.dashboard_tc');
    }
}
