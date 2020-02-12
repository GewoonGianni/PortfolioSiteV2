<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Article;

class ArticleController extends Controller
{
    function showAll()
    {
        $articles = \DB::table('articles');
        $articles = Article::Latest()->get();

        return view('blog', [
            'articles' => $articles,
        ]);
    }

    function show($slug)
    {
        $article = \DB::table('articles')->where('slug', $slug)->first();

        return view('article.article', [
            'article' => $article,
        ]);
    }

    function create()
    {
        return view('article.articleCreation');
    }

    function store()
    {
        request()->validate([
            'title' => ['required', 'min:1', 'max:225'],
            'excerpt' => ['required', 'min:1', 'max:225'],
            'body' => ['required', 'min:1', 'max:1023'],
            'slug' => ['required', 'min:1', 'max:63'],
        ]);

        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->slug = request('slug');

        $article->save();

        return redirect('/../blog');
    }

    function edit($slug)
    {
        $article = Article::where('slug', $slug)->first();

        return view('article.articleEdit', ['article' => $article]);
    }

    function update($slug)
    {
        request()->validate([
            'title' => ['required', 'min:1', 'max:225'],
            'excerpt' => ['required', 'min:1', 'max:225'],
            'body' => ['required', 'min:1', 'max:1023'],
            'slug' => ['required', 'min:1', 'max:63'],
        ]);

        $article = Article::where('slug', $slug)->first();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->slug = request('slug');

        $article->save();

        return redirect('/../blog/' . $article -> slug);
    }

    function destroy ($slug) {
        $article = Article::where('slug', $slug)->first();

        $article->delete();

        return redirect('/../blog');
    }
}
