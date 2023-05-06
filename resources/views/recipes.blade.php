@extends('layouts.main_page')
@section('content')
    <title>Рецепти2222</title>
    @for($i=0; $i<$posts->count(); $i++)
        <div>{{ $posts[$i]->id}}.{{ $posts[$i]->title}}</div>
    @endfor
@endsection
