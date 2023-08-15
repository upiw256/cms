<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerDashboard extends Controller
{
    public function index()
    {
        return view('dashboard.home', ['active' => 'dashboard']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
