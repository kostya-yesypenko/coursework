@extends('layouts.main_page')
@section('content')
    <title>Рецепти</title>

    <h1 class="hr-lines"><span>РЕЦЕПТИ & КУЛІНАРНІ ІДЕЇ</span></h1>
    <p class="about-recipes">
        Наші найкращі рецепти, розроблені та перевірені, щоб допомогти Вам приготувати чудову сімейну їжу.
    </p>
    <div class="quick-find">
        <div class="quick-links">
            <ul>
                <li><a href="">ГОЛОВНА</a></li>
                <li><a href="">РЕЦЕПТИ</a></li>
                <li><a href="">МАГАЗИН</a></li>
                <li><a href="">ПРО НАС</a></li>
                <li><a href="">ГОЛОВНА</a></li>
                <li><a href="">ГОЛОВНА</a></li>
            </ul>
        </div>
    </div>

    <hr>
    @foreach($chunks as $chunk)
        <div class="container">
            @for($i=0; $i<sizeof($chunk); $i++)
                <div class="responsive">
                    <div class="gallery">
                        <a target="" href="{{ route('post.show', $chunk[$i]->id) }}">
                            <img src="images/{{ $chunk[$i]->image }}" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">
                            <div class="food-type">{{ $chunk[$i]->category->title }}</div>
                            <div class="food-name">{{ $chunk[$i]->title }}</div>
                            <div class="timer">
                                <i class="fa fa-clock-o"></i>
                                <span>{{ $chunk[$i]->time }} хв</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    @endforeach
    <div class="pagination">
        {{ $posts->links() }}
    </div>
    <div class="clearfix"></div>
    <div class="btn">
        <a href="{{ route('post.create') }}"><button class="button">Створити свій рецепт</button></a>
    </div>
@endsection
