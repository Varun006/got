<?php

namespace App\Http\Controllers;

use App\DeadParty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Null_;

class DeadPartyController extends Controller
{
    public function index()
    {
        $deads = DeadParty::all();

        return view ('admin.DeadParty.index',compact('deads'));
    }

    public function create()
    {
        return view('admin.DeadParty.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'role' => 'required',
            'time' => 'required',
            'execution' => 'required',
            'photo' => 'image'
        ]);

        $id = DeadParty::create($request->except('_token','photo'))->id;

        if ($request->hasFile('photo')) {
            $this->storePhoto($request, $id);
        }

        return back()->with('success',true);
    }

    public function storePhoto($request, $id)
    {
        $photoName = $request->file('photo')->store('public/DeadParty');

        DeadParty::where('id', $id)->update(['photo' => $photoName]);
    }

    public function edit(DeadParty $dead)
    {
        $url = Storage::url($dead->photo);

        return view('admin.DeadParty.edit', compact('dead' , 'url'));
    }

    public function update(Request $request, DeadParty $dead)
    {
        $this->validate($request, [
            'name' => 'required',
            'role' => 'required',
            'time' => 'required',
            'execution' => 'required',
        ]);

        $dead->update($request->except('_token','_method','photo'));

        if ($request->hasFile('photo')) {
            $this->storePhoto($request, $dead->id);
        }

        return back()->with('success',true);
    }

    public function show()
    {
        $deads = DeadParty::all();

        $deads = $deads->each(function($dead) {
             if ($dead->photo != null) {
                $dead->url = Storage::disk('local')->url($dead->photo);
             }
        });


        return view('public.deadParty',compact('deads'));
    }

}
