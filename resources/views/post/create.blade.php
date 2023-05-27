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
                    <label for="title">Назва</label>
                    <input type="text" name="title" placeholder="Type title", id="title">
                </div>

                <div>
                    <label for="ingredients">Інгредієнти</label>
                    <textarea name="ingredients" id="ingredients" placeholder="Type ingredients"></textarea>
                </div>

                <div>
                    <label for="content">Опис</label>
                    <textarea name="content" id="content" placeholder="Type content"></textarea>
                </div>

                <div>
                    <label for="category_id">Категорія</label>
                    <input type="text" name="category_id" placeholder="Type category", id="category_id">
                </div>

                <div>
                    <label for="time">Час приготування</label>
                    <input type="text" name="time" placeholder="Type time", id="time">
                </div>

                <div>
                    <label for="image">Зображення</label>
                    <input type="text" name="image" placeholder="Type image", id="image">
                </div>
                <button class="button" type="submit" style="margin-top: 2.5em;">Створити</button>
            </form>
        </div>
    </div>

@endsection
