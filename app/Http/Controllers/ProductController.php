<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at','asc')->limit(20)->get();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('admin.products.create', compact('user'));
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
            'cover' => 'url|image|nullable',
            'description' => 'string|nullable',
            'price' => 'required|numeric',
            'visibility' => 'required|boolean',
        ]);

        $data = $request->all();

        $product = new Product();

        if( $product->name != $data['name'] ){
            $slug = Product::getUniqueSlug($data['name']);
            $data['slug'] = $slug;
        };
        
        $product->fill($data);
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
        $user = Auth::user();
        return view('admin.products.edit', compact('product', 'categories'));
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
            'cover' => 'url|image|nullable',
            'description' => 'string|nullable',
            'price' => 'required|numeric',
            'visibility' => 'required|boolean',
        ]);
        
        // dd($product);
        $data = $request->all();

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
        // $product->delete();

        // return redirect()->route('admin.products.index');
    }
}
