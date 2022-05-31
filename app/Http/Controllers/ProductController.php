<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('name','asc')->limit(25)->get();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        $user = Auth::user();
        $categories = Category::all();

        return view('admin.products.create', compact('user', 'product', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|min:3',
            'cover' => 'image|nullable|file|max:4096|mimetypes: image/jpeg, image/png',
            'description' => 'string|nullable',
            'price' => 'required|numeric',
            'visibility' => 'required|boolean',
        ]);

        $data = $request->all();
        
        $product = new Product();
        $userId = Auth::id();
        $product->user_id = $userId;
        
        if( $product->name != $data['name'] ){
            $slug = Product::getUniqueSlug($data['name']);
            $data['slug'] = $slug;
        };
        
        $product->fill($data);

        $product->save();

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        $user_id = Auth::id();
        $products = Product::where('user_id', '=' ,$user_id)->orderBy('name')->get();

        $user = User::where('id', '=', $user_id)->first();

        return view('admin.products.edit', compact('user', 'product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:100|min:3',
            'cover' => 'image|nullable|file|max:4096',
            'description' => 'string|nullable',
            'price' => 'required|numeric',
            'visibility' => 'required|boolean',
        ]);
        
        // dd($product);
        $data = $request->all();

        if(array_key_exists('cover', $data)){
            $cover_path = Storage::put('uploads', $data['cover']);

            $data['cover'] = $cover_path;
        } else {
            $cover_path = $product['cover'];
            $data['cover'] = $cover_path;
        }

        if( $product->name != $data['name'] ){
            $slug = Product::getUniqueSlug($data['name']);
            $data['slug'] = $slug;
        };
        
        $product->update($data);
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->trashed()){
            $product->forceDelete();
        } else{
            $product->delete();
        }

        return redirect()->route('admin.users.index');
    }

    public function forceDestroy($id){
        $product = Product::where('id', $id)->withTrashed()->first();
        $product->forceDelete();

        return redirect()->route('admin.users.index');
    }
}
