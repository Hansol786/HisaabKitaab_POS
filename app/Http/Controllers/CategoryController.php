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
    // Store Category in Database
    public function submitCategory(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = Storage::disk('dashboard')->put('category', $request->file('image'));
        }
        Category::create([
            'name' => $request->name,
            'is_active' => $request->is_active,
            'image' => $image
        ]);
        return redirect()->back()->with(['title' => 'Done', 'message' => 'Category added succssfully', 'type' => 'success']);
    }
    // Fetch all categories from Database
    public function categories()
    {
        $categories = Category::get();
        return view('dashboard.products.category.categories', compact('categories'));
    }
    // Get Category by Id from Database
    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }
        return response()->json($category);
    }
    // Update Category in Database
    public function updateCategory(Request $request)
    {
        // Find the category by ID
        $category = Category::findOrFail($request->id);
        // Store the old image path to delete it later
        $oldImagePath = $category->image;
        // Initialize a variable for the new image path
        $image = null;
        // Check if a new image file is uploaded
        if ($request->hasFile('image')) {
            // Store the new image
            $image = Storage::disk('dashboard')->put('category', $request->file('image'));
            // Delete the old image from the storage if it exists
            if ($oldImagePath) {
                Storage::disk('dashboard')->delete($oldImagePath);
            }
        } else {
            // If no new image is uploaded, keep the old image path
            $image = $oldImagePath;
        }
        // Update the category details
        $category->update([
            'name' => $request->name,
            'is_active' => $request->is_active,
            'image' => $image
        ]);
        // Redirect back with a success message
        return redirect()->back()->with(['title' => 'Done', 'message' => 'Category updated successfully!', 'type' => 'success']);
    }
    // Delete Category from database
    public function deleteCategory($id)
    {
        // Find the category by ID
        $category = Category::findOrFail($id);
        // Get the image path to delete it from storage
        $imagePath = $category->image;
        // Delete the category record
        $category->delete();
        // Check if the image exists and delete it from storage
        if ($imagePath) {
            Storage::disk('dashboard')->delete($imagePath);
        }
        // Redirect back with a success message
        return redirect()->back()->with(['title' => 'Deleted', 'message' => 'Category deleted successfully!', 'type' => 'success']);
    }
}
