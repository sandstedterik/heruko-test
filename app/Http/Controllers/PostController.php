<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index() {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function create() {
        $data = request()->all();
        $post = Post::create($data);

        return redirect('posts');
    }

    public function edit(){
        $post = Post::find($id);

        return view('posts.edit', [
            'posts' => $posts,
       ]);
    }

    public function destroy($id) {
        // from net ninja
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts');
    }
}
