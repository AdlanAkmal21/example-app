<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoordinatorController extends Controller
{
    public function dashboard_coordinator()
    {
        return view('dashboard.dashboard_coordinator');
    }
}
