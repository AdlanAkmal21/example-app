<?php

namespace App\Http\Controllers;

use App\Models\RefRole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard_admin()
    {
        return view('dashboard.dashboard_admin');
    }


}
