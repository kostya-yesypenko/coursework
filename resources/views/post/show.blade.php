@extends('layouts.main_page')
@section('content')
    <title>{{ $post->title }}</title>
    <hr>

        <div class="food-info">
            <img src="{{ asset('images/'.$post->image) }}" alt="{{$post->title}}">
            <h2>{{ $post->title }}</h2>
            <p style="font-weight: bold">Інгредієнти:</p>
            <p>{{$post->ingredients}}</p>
            <p style="font-weight: bold">Приготування:</p>
            <p>{{$post->content}}</p>
        </div>
    </div>
    <hr>

{{--    <div>--}}
{{--        <a href="{{route('post.edit', $post->id)}}">Змінити</a>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <a href="{{ route('post.index') }}">Назад</a>--}}
{{--    </div>--}}
@endsection




