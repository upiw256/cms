<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerIndex extends Controller
{
    function index() {
        return view('home.index');
    }
}
