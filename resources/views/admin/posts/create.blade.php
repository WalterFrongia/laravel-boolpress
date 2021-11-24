@extends('layouts.main')

@section('posts')

    <form action="{{ route('admin.post.store')}}" method="POST">
        @csrf

        <input type="text" placeholder="inserisci il titolo" name="title">

        <input type="text" placeholder="inserisci link url. img." name="url_img">

        <input type="text" placeholder="inserisci del testo" name="text">

        <input type="text" placeholder="inserisci data di publicazione" name="publication_date">

        <input type="submit" value="CREATE">


        <select name="category_id"> <!--category_id rappresenta la colonna in posts (la foreign key)-->
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

    </form>

@endsection