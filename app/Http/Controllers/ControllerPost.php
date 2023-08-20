<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use \Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\ModelPost;

class ControllerPost extends Controller
{
    public function index()
    {
        $data = ModelPost::all();
        $page = ModelPost::paginate(10);
        $no = 1;
        return view('dashboard.post', ['active' => 'post', 'data' => $data, 'page' => $page, 'no' => $no]);
    }
    public function post_proses(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:255', 'unique:post'],
            'isi' => ['required'],
            'image' => ['required', 'mimes:jpg, jpeg, png, bmp, gif, svg', 'max:1024'],
        ]);

        $now = Carbon::now();
        $uuid = Uuid::uuid4();
        $judul = $request->title;
        $isi = $request->isi;
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $judul)));
        $image = $request->file('image');
        $filename = date('ms-') . str_replace(' ', '', $image->getClientOriginalName());
        $path = 'upload/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($image));

        $data = [
            'id' => $uuid,
            'title' => $judul,
            'img' => $filename,
            'isi' => $isi,
            'slug' => $slug,
            'created_at' => $now,
            'updated_at' => $now,
        ];

        ModelPost::create($data);
        // dd($save);
        return redirect()->route('admin.post');
    }
}
