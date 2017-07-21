<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware(IsAdmin::class, ['except' => 'show']);
    }

    public function index()
    {
        $news = News::all();

        return view('admin.news.index',compact('news'));
    }

    public function create()
    {
         return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
        ]);

        $request->merge(['slug' => str_slug($request->input('title'))]);

        $newsID = News::create($request->except('_token','video','photo'))->id;

        if ($request->hasFile('photo')) {
            $this->storePhoto($request, $newsID);
        } else {
            News::where('id',$newsID)->update(['media_url' => $request->input('video')]);
        }

        return back()->with('success',true);
    }

    public function storePhoto($request, $id)
    {
        $photoName = $request->file('photo')->store('public/news');

        News::where('id', $id)->update(['media_url' => $photoName]);
    }

    public function edit(News $news)
    {
        $url = $news->media_url;

        if($news->media_type == 'photo') {
            $url = Storage::url($news->media_url);
        }

        return view('admin.news.edit', compact('news' , 'url'));
    }

    public function update(Request $request, News $news)
    {
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
        ]);

        $request->merge(['slug' => str_slug($request->input('title'))]);

        $news->update($request->except('_token','_method','video','photo'));

        if ($request->hasFile('photo')) {
            $this->storePhoto($request, $news->id);
        } else {
            if($request->input('video') != '') {
                News::where('id',$news->id)->update(['media_url' => $request->input('video')]);
            }
        }

        return back()->with('success',true);
    }

    public function destroy()
    {
        News::destroy(request()->input('id'));

        return response()->json([
            'success' => true,
            'toastr' => true
        ]);
    }

    public function single($slug)
    {
        $news = News::whereSlug($slug)->first();

        $latest = News::latest()->take(3)->get();

        if($news->media_type == 'photo') {
            $news->image_url = Storage::disk('local')->url($news->media_url);
        }

        return view('public.newsDetails',compact('news','latest'));
    }
}
