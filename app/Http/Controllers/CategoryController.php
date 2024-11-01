<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function submitCategory(Request $request){
        if ($request->hasFile('image')) {
            $image = Storage::disk('dashboard')->put('category', $request->file('image'));
        }
        Category::create([
            'name' => $request->name,
            'is_active' => $request->name,
            'image' => $image
        ]);
        return redirect()->back()->with(['title'=>'Done','message'=>'Category added succssfully','type'=>'success']);
    }
    public function categories()
    {
        $categories = Category::get();
        return view('dashboard.products.category.categories',compact('categories'));
    }
}
