<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerLogin extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login_proses(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );
        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if (Auth::attempt($data)) {
            return dd('Dashboard');
        } else {
            return redirect()->route('login')->with('gagal', 'Email atau password salah');
        }
    }
}
