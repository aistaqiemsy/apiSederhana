<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Validator;

class PostController extends Controller
{
    public function index() { // menampilkan keseluruhan data
        $post = Post::latest()->paginate(5);
        return new PostResource($post);
    }
    
    
    
        // public function index() {
        //     $post = Post::latest()->paginate(5);
        //     // return new PostResource(true, 'Data', $post);

        //     // return new PostResource($post);

        //     // kirim ke view
        //     return view('tampilData', ['hasilData' => $post]);
        // }

    public function store(Request $request) { // menyimpan data
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $post = Post::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return new PostResource($post);
    }

    public function show($id) { // menampilkan data by id
        $post = Post::find($id);
        // return new PostResource($post);

        //passing ke view
        return view('detail', ['dataSiswa' => $post]);
    }
}
