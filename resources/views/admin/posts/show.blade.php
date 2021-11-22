@extends('layouts.main')

@section('posts')
    <div id="show-container">
        <h2>{{$post->title}}</h2>
       <img src="{{$post->url_img}}" alt="">
       <p>{{$post->text}}</p>
       <p>{{$post->publication_date}}</p>

       <p>{{$post->category->name}}</p>
    </div>
@endsection