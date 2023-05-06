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
   //     $post = Post::getLatestPost();
//        $category = Category::find(1);
//        $post = Post::getLatestPost(1);
     //   dd($post);
//        $tags = Tag::find(1);
//   //     Log::info($post->category);
//        dd($tags->posts);
        $posts = Post::all();
//        $category= category::find(1)
       // $category = Category::find($post->category_id);
//        dd($category->posts);

//        $posts = Post::all();
//        dd($category->posts);
//        dd($category);

//        $request->session()->put('user', 'iesypenko');
        return view('post.index', compact('posts'));
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
