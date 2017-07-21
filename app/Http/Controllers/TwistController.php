<?php

namespace App\Http\Controllers;

use App\AnswerSet;
use App\Episode;
use App\Twist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TwistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only' => 'show']);

        $this->middleware(IsAdmin::class, ['except' => 'show']);
    }

    public function index()
    {
        $twists = Twist::all();

        return view('admin.twists.index',compact('twists'));
    }

    // change default ID here as well, every week on monday.
    public function create()
    {
        $e_id = Input::get('e_id','2');

        $twist = '';

        if (Twist::where('episode' , 2)->first() != null) {
            $twist = Twist::whereEpisode(2)->first();
        }

        $episodes = Episode::pluck('number','id');

        $answers = AnswerSet::where('episode',$e_id)->pluck('answer','id');

        return view('admin.twists.create',compact('episodes','answers','e_id','twist'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'question' => 'required',
        ]);

        Twist::create($request->except('_token'));

        return back()->with('success',true);
    }

    // Change this method every Monday. (change where parameters)
    public function show()
    {
        $question = Twist::where('episode', '2')->first();

        $answers = AnswerSet::where('episode','2')->get();

        return view('public.twist',compact('question','answers'));
    }

}
