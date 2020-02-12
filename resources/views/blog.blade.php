@extends('layout')
@section('title')
    Blog
@endsection
@section('content')
    <div class="container-fluid" style="padding-top: 50px; padding-bottom: 20px;">
        <h1>Blog</h1>
        @foreach($articles as $article)
            <a class="text-body" href="blog/{{$article->slug}}">
                <h2>{{$article -> title}}</h2>
            </a>
            <p>{{$article -> excerpt}}</p>
            <hr class="clearfix w-100">
        @endforeach

        <a href="/blog/create"><button class="btn btn-outline-dark">Maak post</button></a>
    </div>
@endsection
