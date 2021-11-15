@extends('layouts.main')

@section('posts')
    <div id="posts-wrap">
        <div id="posts-container">
            @foreach($posts as $post)
                <div id="post">
                    <h2>{{ $post -> title }}</h2>
                    <img src="{{$post->url_img}}" alt="">
                    <a href="{{route('admin.post.show' , $post->id)}}">Leggi post</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection