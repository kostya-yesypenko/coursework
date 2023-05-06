@extends('layouts.main_page')
@section('content')
    <title>Створити рецепт</title>
    <div class="post-create">
        <h1 class="hr-lines"><span>НОВИЙ РЕЦЕПТ</span></h1>
        @if($errors->any())
            <div class="alert alert-danger" style="color:red;">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="post-create post-form">
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div>
                    <label for="title">Title </label>
                    <input type="text" name="title" placeholder="Type title", id="title">
                </div>

                <div>
                    <label for="content">Content </label>
                    <textarea name="content" id="content" placeholder="Type content"></textarea>
                </div>

                <div>
                    <label for="image">Image </label>
                    <input type="text" name="image" placeholder="Type image", id="image">
                </div>
                <button class="button" type="submit" style="margin-top: 2.5em;">Create</button>
            </form>
        </div>
    </div>

@endsection
