<?php

namespace App\Http\Controllers;

use App\Prediction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PredictionController extends Controller
{
    public function index()
    {
        $predictions = Prediction::all();

        return view('admin.prediction.index',compact('predictions'));
    }

    public function create()
    {
        return view('admin.prediction.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'photo' => 'image'
        ]);

        $id = Prediction::create($request->except('_token','photo'))->id;

        if ($request->hasFile('photo')) {
            $this->storePhoto($request, $id);
        }

        return back()->with('success',true);
    }

    public function storePhoto($request, $id)
    {
        $photoName = $request->file('photo')->store('public/prediction');

        Prediction::where('id', $id)->update(['photo' => $photoName]);
    }

    public function edit(Prediction $prediction)
    {
        $url = Storage::url($prediction->photo);

        return view('admin.prediction.edit', compact('prediction' , 'url'));
    }

    public function update(Request $request, Prediction $prediction)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $prediction->update($request->except('_token','_method','photo'));

        if ($request->hasFile('photo')) {
            $this->storePhoto($request, $prediction->id);
        }

        return back()->with('success',true);
    }

    public function show()
    {
        $predictions = Prediction::all();

        $predictions = $predictions->each(function($prediction) {
            if ($prediction->photo != null) {
                $prediction->url = Storage::disk('local')->url($prediction->photo);
            }
        });

        return view('public.predictions',compact('predictions'));
    }
}
