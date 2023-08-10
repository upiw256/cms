<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ControllerPost extends Controller
{
    public function index()
    {
        return view('dashboard.post', ['active' => 'post']);
    }
    public function post_proses(Request $request)
    {
        $now = Carbon::now();
        $uuid = Uuid::uuid4();
        $data = [
            'id' => $uuid,
            'judul' => $request->input('judul'),
            'image' => $request->file('image'),
            'isi' => $request->input('isi'),
            'created_at' => $now,
            'updated_at' => $now,
        ];
        dd($data);
    }
}
