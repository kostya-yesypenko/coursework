@extends('layouts.main_page')
@section('content')
    <title>{{ $post->title }}</title>
    <hr>

        <div class="food-info">
            <img src="{{ asset('images/'.$post->image) }}" alt="{{$post->title}}">
            <h2>{{ $post->title }}</h2>
            <p>{{$post->content}}</p>
        </div>
    </div>
    <hr>

    <div>
        <a href="{{route('post.edit', $post->id)}}">Edit</a>
    </div>

    <div>
        <a href="{{ route('post.index') }}">Back to the recipes</a>
    </div>
@endsection




