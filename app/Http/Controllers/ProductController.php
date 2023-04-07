<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
  public function index()
  {
    $products = Product::all();
    return view('product', [
      'page_title' => 'RekaDigi - Products',
      'title' => 'Products',
      'products' => $products,
    ]);
  }
  
  public function insert(Request $request)
  {
    try {
      $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max size of 2MB
      ]);
      
      $product = new Product();
      $product->name = $request->name;
      $product->description = $request->description;
      
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('public/product', $filename);
        $product->image = $path;
      }
      
      $product->save();
      
      return redirect('/product')->with('success', 'Data inserted successfully.');
    } catch (\Exception $e) {
      return redirect('/product')->with('error', 'Failed to insert data. ' . $e->getMessage());
    }
  }
  
  public function delete($id) {
    try {
      $product = Product::find($id);
      $product->delete();
  
      return redirect('/product');
    } catch (\Exception $e) {
      return redirect('/product')->with('error', 'Failed to delete data. ' . $e->getMessage());
    }
  }
}
