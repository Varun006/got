<?php

namespace App\Http\Controllers;

use App\AnswerSet;
use App\Episode;
use Illuminate\Http\Request;

class AnswerSetController extends Controller
{
    public function __construct()
    {
        $this->middleware(IsAdmin::class, ['except' => 'show']);
    }

    public function index()
    {
        $episodes = Episode::pluck('2','id');

        return view('admin.answers.create',compact('episodes'));
    }

    public function create()
    {
        $episodes = Episode::pluck('number','id');

        return view('admin.answers.create',compact('episodes'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'episode' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
        ]);

        $answer_options = ['1' , '2' , '3' , '4'];

        foreach($answer_options as $option) {
            AnswerSet::create([
                'episode' => $request->input('episode'),
                'answer' => $request->input('option_'.$option)
            ]);
        }

        return back()->with('success', true);
    }
}
