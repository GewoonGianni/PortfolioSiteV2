@extends('layout')
@section('title')
    Blog
@endsection

@section('content')
    <div class="container-fluid" style="padding-top: 65px; padding-bottom: 20px;">
        <h2>
            Edit blog post
        </h2>
        <form method="POST" action="/blog/{{$article -> slug}}">
            @csrf
            @method('PUT')
            <label class="label" for="titleInput">Title</label>
            <input placeholder="Titel" class="form-control @error('title') is-invalid @enderror" id="titleInput" type="text" name="title" value="{{$article -> title}}">
            @error('title')
            <span class="text-danger">{{$errors->first('title')}}</span>
            @enderror

            <br>

            <label class="label" for="excerptInput">Excerpt</label>
            <textarea placeholder="Excerpt" name="excerpt" class="form-control @error('excerpt') is-invalid @enderror" rows="5" id="excerptInput">{{$article -> excerpt}}</textarea>
            @error('excerpt')
            <span class="text-danger">{{$errors->first('excerpt')}}</span>
            @enderror

            <br>

            <label class="label" for="bodyInput">Body</label>
            <textarea placeholder="Body" name="body" class="form-control @error('body') is-invalid @enderror" rows="5" id="bodyInput">{{$article -> body}}</textarea>
            @error('body')
            <span class="text-danger">{{$errors->first('body')}}</span>
            @enderror

            <br>

            <label class="label" for="slugInput">Slug</label>
            <input placeholder="Slug" class="form-control @error('slug') is-invalid @enderror" id="slugInput" type="text" name="slug" value="{{$article -> slug}}">
            @error('slug')
            <span class="text-danger">{{$errors->first('slug')}}</span>
            @enderror

            <br>

            <button type="submit" class="btn btn-outline-dark">Submit</button>
        </form>
    </div>
@endsection
