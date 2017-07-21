<?php

namespace App\Http\Controllers;

use App\UserGuess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserGuessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => '']);
    }

    public function store()
    {
        if(UserGuess::where(['episode' => request()->get('episode') , 'user_id' => Auth::id()])->count() == '0') {
            UserGuess::create([
                'episode' => request()->get('episode'),
                'user_id' => Auth::id(),
                'answer_id' => request()->get('answer')
            ]);

            return back()->with('success',true);
        }else {
            return back()->with('error',true);
        }
    }
}
