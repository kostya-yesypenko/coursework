@extends('layouts.main_page')
@section('content')
    <h1>Create Post</h1>

    @if($errors->any())
    <div class="alert alert-danger" style="color: red;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ route('post-form') }}" method="post">
        @csrf
        <div>
            <label for="title">Title </label>
            <input type="text" name="title" placeholder="Type title", id="title">
        </div>

        <div>
            <label for="content">Content </label>
            <textarea name="content" id="content" placeholder="Type content"></textarea>
        </div>

        <button type="submit">Confirm</button>
    </form>
@endsection