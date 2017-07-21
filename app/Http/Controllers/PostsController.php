<?php

namespace App\Http\Controllers;

use App\Article;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function show()
    {
        $allNews = News::all();

        $news = $allNews->each(function($single) {
            if ( $single->media_type == 'photo' ) {
                $single->url = Storage::url($single->media_url);
            }
        });

        $allArticles = Article::all();

        $articles = $allArticles->each(function($single) {
            if ( $single->media_type == 'photo' ) {
                $single->url = Storage::disk('local')->url($single->media_url);
            }
        });

        return view('public.news-article', compact('news','articles'));
    }
}
