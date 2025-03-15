<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Validator;

class PostController extends Controller
{
    // public function index() { // menampilkan keseluruhan data
    //     $post = Post::latest()->paginate(5);
    //     return new PostResource($post);
    // }
    
    
    
        public function index() {
            $post = Post::get();
            // return new PostResource(true, 'Data', $post);

            // return new PostResource($post);

            // kirim ke view
            return view('tampilData', ['hasilData' => $post]);
        }

    public function store(Request $request) { // menyimpan data
        $validator = Validator::make($request->all(), [
            // dengan view laravel
            'nama' => $request->txNama,
            'alamat' => $request->txAlamat

            //uji dengan postman
            // 'nama' => 'required',
            // 'alamat' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $post = Post::create([
            // dengan view laravel
            'nama' => $request->txNama,
            'alamat' => $request->txAlamat
            
            // uji dengan postman
            // 'nama' => $request->nama,
            // 'alamat' => $request->alamat
        ]);

        // return new PostResource($post); // tampil bentuk JSON

        $dataBaru = Post::get();
        return view('tampilData', ['hasilData' => $dataBaru]);
    }

    public function show($id) { // menampilkan data by id
        $post = Post::find($id);
        // return new PostResource($post);

        //passing ke view
        return view('detail', ['dataSiswa' => $post]);
    }

    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();

        return redirect('/api/post');
    }

    public function login(Request $request) {
        $username = $request->namaPengguna;
        $password = $request->sandiPengguna;

        if ($username == "" && $password == "") {
            return "Autentikasi gagal! <a href='/'>Coba lagi...</a>";
        } else {
            return redirect('/api/post');
        }
    }
}
