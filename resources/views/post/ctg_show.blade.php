@extends('layouts.main_page')
@section('content')
    <title>{{ $category->title }}</title>

    <h1 class="hr-lines" style="margin-bottom: 40px;"><span>{{ $category->title }}</span></h1>
    <div class="quick-find">
        <div class="quick-links">
            <ul>
                @foreach($categories as $category)
                    <li><a href="{{ route('post.ctg_show', $category->id) }}">{{ $category->title }}</a></li>
                @endforeach
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
                            <img src="{{ asset('images/'.$chunk[$i]->image)}}" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">
                            <div class="food-type"><a href="{{ route('post.ctg_show', $chunk[$i]->category->id) }}">{{ $chunk[$i]->category->title }}</a></div>
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
