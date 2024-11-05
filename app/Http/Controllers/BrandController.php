<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Get all brands from Database
    public function brands()
    {
        $brands = Brand::get();
        return view('dashboard.products.brand.brands',compact('brands'));
    }
    public function submitBrand(Request $request){
        if($request->hasFile('image')){
            $image = Storage::disk('dashboard')->put('brand', $request->file('image'));
        }
        Brand::create([
            'name' => $request->name,
            'image' => $image,
            'status' => $request->status
        ]);
        return redirect()->back()->with(['title'=>'Done', 'message'=>'Brand added successfully', 'type'=>'success']);
    }
       // Get brand by Id from Database
       public function show($id)
       {
           $brand = Brand::find($id);
           if (!$brand) {
               return response()->json(['message' => 'Brand not found'], 404);
           }
           return response()->json($brand);
       }
       // Update brand in Database
       public function updateBrand(Request $request)
       {
           // Find the brand by ID
           $brand = Brand::findOrFail($request->id);
           // Store the old image path to delete it later
           $oldImagePath = $brand->image;
           // Initialize a variable for the new image path
           $image = null;
           // Check if a new image file is uploaded
           if ($request->hasFile('image')) {
               // Store the new image
               $image = Storage::disk('dashboard')->put('brand', $request->file('image'));
               // Delete the old image from the storage if it exists
               if ($oldImagePath) {
                   Storage::disk('dashboard')->delete($oldImagePath);
               }
           } else {
               // If no new image is uploaded, keep the old image path
               $image = $oldImagePath;
           }
           // Update the category details
           $brand->update([
               'name' => $request->name,
               'status' => $request->status,
               'image' => $image
           ]);
           // Redirect back with a success message
           return redirect()->back()->with(['title' => 'Done', 'message' => 'Brand updated successfully!', 'type' => 'success']);
       }
       // Delete Category from database
       public function deleteBrand($id)
       {
           $brand = Brand::findOrFail($id);
           if($brand){
               $oldImage = $brand->image;
               if($oldImage){
                   Storage::disk('dashboard')->delete($oldImage);
               }
               $brand->delete();
           }
           return redirect('categories')->with(['title' => 'Done','type' => 'success','message' => 'Brand deleted successfully!']);
       }
}
