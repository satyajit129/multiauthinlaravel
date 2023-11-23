<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function adminDashboard()
    {
        return view('admin_dashboard');
    }

    public function superAdminDashboard()
    {
        return view('super_admin_dashboard');
    }
}
