@extends('layouts.main')

@section('posts')
    <form action="{{route('admin.post.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')

        <!-- name è importante perchè prende il valore dell'input e associa alla chiave del name -->

        <input type="text" value="{{$post->title}}" name="title" > 

        <input type="text" value="{{$post->url_img}}" name="url_img">

        <input type="text" value="{{$post->text}}" name="text">

        <input type="text" value="{{$post->publication_date}}" name="publication_date">

        <input type="submit" value="EDIT">
        
        <select name="category_id"> <!--category_id rappresenta la colonna in posts (la foreign key)-->
            @foreach($categories as $category)
                <option value="{{$category->id}}" @if($category->id == $post->category_id) selected @endif >{{$category->name}}</option>
            @endforeach
        </select>

    </form>
@endsection