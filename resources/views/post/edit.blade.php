@extends('layouts.main_page')
@section('content')
    <div>
        <h1>Edit Post</h1>

        @if($errors->any())
            <div class="alert alert-danger" style="color: red;">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div>
                <label for="title">Title </label>
                <input type="text" name="title" placeholder="Type title" id="title" value="{{ $post->title }}">
            </div>

            <div>
                <label for="content">Content </label>
                <textarea name="content" id="content" placeholder="Type content">{{ $post->content }}</textarea>
            </div>

            <div>
                <label for="image">Image </label>
                <input type="text" name="image" placeholder="Type image" id="image" value="{{ $post->image }}">
            </div>

            <button type="submit">update</button>
        </form>
    </div>

@endsection
