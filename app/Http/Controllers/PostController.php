<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Book;
use App\Models\Tag;
use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(4);
        $l = Post::paginate(4)->all();
        $n = 4;
        $chunks = array();
        for ($i = 0; $i < count($l); $i += $n) {
            $chunks[] = array_slice($l, $i, $n);
        }
        return view('witch.witch_recipes', compact('chunks', 'posts'));
    }


    public function create()
    {
        return view('post.create');
    }


    public function store()
    {
        $data = request()->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'image' => 'string|required',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }


    public function show(Request $request,Post $post)
    {
        return view('post.show', compact('post'));
    }


    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }


    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string|required|min:3',
            'content' => 'string|required|max:50'
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }
}
