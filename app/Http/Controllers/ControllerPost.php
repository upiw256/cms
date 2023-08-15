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
        return view('dashboard.post', ['active' => 'post']);
    }
    public function post_proses(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => ['required', 'max:255'],
            'isi' => ['required'],
            'image' => ['required','mimes:jpg, jpeg, png, bmp, gif, svg','max:1024'],
        ]);
        $now = Carbon::now();
        $uuid = Uuid::uuid4();
        $judul = $request->judul;
        $isi = $request->isi;
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $judul)));
        $image = $request->file('image');
        $filename= date('ms').$image->getClientOriginalName();
        $path = 'upload/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($image));

        $data = [
            'id' => $uuid,
            'title'=>$judul,
            'img'=>$filename,
            'isi'=> $isi,
            'slug'=> $slug,
            'created_at' => $now,
            'updated_at' => $now,
        ];

        ModelPost::create($data);
        return redirect()->route('admin.post');
    }
}
