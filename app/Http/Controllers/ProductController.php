<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Middleware\IsAdmin;
use App\Merchandise;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
//        $this->middleware(IsAdmin::class, ['except' => 'show']);
    }

    public function show()
    {
        $products = Product::all();

        $products = $products->each(function($product){
            $product->photo_url = Storage::disk('local')->url($product->photo);
            $product->category = Category::where('id',$product->category)->value('name');
        });

        return view('public.products',compact('products'));
    }

    public function index()
    {
        $products = Product::all();

        return view('admin.products.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::pluck('name' , 'id');

        $merchandises = Merchandise::pluck('type', 'type');

        return view('admin.products.create', compact('categories','merchandises'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|unique:products',
           'category' => 'required',
           'merchandise_type' => 'required',
           'description' => 'required',
           'photo' => 'required|image'
        ]);

        $id = Product::create($request->except('_token','photo'))->id;

        $this->storePhoto($request, $id);

        return back()->with('success',true);
    }

    public function storePhoto($request, $id)
    {
        $photoName = $request->file('photo')->store('public/products');

        Product::where('id', $id)->update(['photo' => $photoName]);
    }

    public function edit(Product $product)
    {
        $categories = Category::pluck('name' , 'id');

        $merchandises = Merchandise::pluck('type', 'type');

        $url = Storage::url($product->photo);

        return view('admin.products.edit', compact('categories','merchandises','product','url'));
    }

    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'merchandise_type' => 'required',
            'description' => 'required',
        ]);

        $product->update($request->except('_token','_method','photo'));

        if($request->hasFile('photo')) {
            $this->storePhoto($request, $product->id);
        }

        return back()->with('success',true);
    }

    public function destroy(Product $product)
    {
        dd(request()->input());
    }

    public function filter($filter)
    {
        $categoryID = Category::whereName($filter)->value('id');

        $products = Product::whereCategory($categoryID)->get();

        $products = $products->each(function($product){
            $product->photo_url = Storage::disk('local')->url($product->photo);
            $product->category = Category::where('id',$product->category)->value('name');
        });

        return view('public.filteredProducts',compact('products' , 'filter'));

    }
}
