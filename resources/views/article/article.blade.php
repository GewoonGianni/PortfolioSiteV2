@extends('layout')
@section('title')
    Blog
@endsection
@section('content')
    <div class="container-fluid" style="padding-top: 65px; padding-bottom: 20px;">
        <h2>{{$article -> title}}</h2>
        <p>{{$article -> body}}</p>

        <a href="/blog/{{$article->slug}}/edit">
            <button class="btn btn-outline-dark">edit</button>
        </a>
        <a href="/blog/{{$article->slug}}/remove">
            <button class="btn btn-outline-danger">remove</button>
        </a>
    </div>
@endsection
