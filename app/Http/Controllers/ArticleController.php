<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware(IsAdmin::class, ['except' => 'show' , 'single']);
    }

    public function index()
    {
        $articles = Article::all();

        return view('admin.articles.index',compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
        ]);

        $request->merge(['slug' => str_slug($request->input('title'))]);

        $articleID = Article::create($request->except('_token','video','photo'))->id;

        if ($request->hasFile('photo')) {
            $this->storePhoto($request, $articleID);
        } else {
            Article::where('id',$articleID)->update(['media_url' => $request->input('video')]);
        }

        return back()->with('success',true);
    }

    public function storePhoto($request, $id)
    {
        $photoName = $request->file('photo')->store('public/article');

        Article::where('id', $id)->update(['media_url' => $photoName]);
    }

    public function edit(Article $article)
    {
        $url = $article->media_url;

        if($article->media_type == 'photo') {
            $url = Storage::url($article->media_url);
        }

        return view('admin.articles.edit', compact('article' , 'url'));
    }

    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
        ]);

        $request->merge(['slug' => str_slug($request->input('title'))]);

        $article->update($request->except('_token','_method','video','photo'));

        if ($request->hasFile('photo')) {
            $this->storePhoto($request, $article->id);
        } else {
            if($request->input('video') != '') {
                Article::where('id',$article->id)->update(['media_url' => $request->input('video')]);
            }
        }

        return back()->with('success',true);
    }

    public function destroy()
    {
        Article::destroy(request()->input('id'));

        return response()->json([
            'success' => true,
            'toastr' => true
        ]);
    }

    public function single($slug)
    {
        $article = Article::whereSlug($slug)->first();

        $latest = Article::latest()->take(3)->get();


        if($article->media_type == 'photo') {
            $article->image_url = Storage::disk('local')->url($article->media_url);
        }

        return view('public.articleDetails',compact('article','latest'));
    }
}
