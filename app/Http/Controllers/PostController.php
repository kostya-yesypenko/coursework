<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Book;
use App\Models\Tag;
use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;
use function Sodium\add;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::paginate(8);
        $l = Post::paginate(8)->all();
        $n = 4;
        $chunks = array();
        for ($i = 0; $i < count($l); $i += $n) {
            $chunks[] = array_slice($l, $i, $n);
        }
        return view('witch.witch_recipes', compact('chunks', 'posts', 'categories'));
    }


    public function create()
    {
        return view('post.create');
    }


    public function store()
    {
        $category_id = Category::where('title', '=' ,request()->input('category_id'))->first()->id;
        request()->merge(['category_id' => $category_id]);
        $data = request()->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'image' => 'string|required',
            'ingredients' => 'string|required',
            'time' => 'int|required',
            'category_id' =>'int|required'
        ]);

        Post::create($data);
        return redirect()->route('post.index');
    }


    public function show(Request $request,Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function ctg_show(Request $request,Category $category)
    {
        $categories = Category::all();
        $posts = Post::where('category_id', '=', $category->id)->paginate(8);
        $l = Post::where('category_id', '=', $category->id)->paginate(8)->all();
        $n = 4;
        $chunks = array();
        for ($i = 0; $i < count($l); $i += $n) {
            $chunks[] = array_slice($l, $i, $n);
        }
        return view('post.ctg_show', compact('chunks', 'categories', 'posts','category'));
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
