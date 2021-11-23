@extends('layouts.main')

@section('posts')

    <form action="{{ route('admin.post.store')}}" method="POST">
        @csrf

        <input type="text" placeholder="inserisci il titolo" name="title">

        <input type="text" placeholder="inserisci link url. img." name="url_img">

        <input type="text" placeholder="inserisci del testo" name="text">

        <input type="text" placeholder="inserisci data di pubblicazione" name="pubblication_date">

        <input type="submit" value="CREATE">

    </form>

@endsection