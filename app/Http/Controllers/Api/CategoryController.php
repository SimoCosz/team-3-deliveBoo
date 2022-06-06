<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::with('users')->orderBy('name', 'asc')->get();

        return response()->json([
            'categories' => $categories,
            'success' => true
        ]);
    }
}
