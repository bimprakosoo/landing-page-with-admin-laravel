<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    try {
      $images = Dashboard::all();
      return view('dashboard', [
        'page_title' => 'RekaDigi - Banner',
        'title' => 'Gambar Banner',
        'images' => $images,
      ]);
    } catch (\Exception $exp) {
      return back()->withErrors(['error' => 'An error occurred.']);
    }
  }
  
  public function upload(Request $request)
  {
    try {
      $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
      ]);
      
      $image = $request->file('image');
      
      $imageName = time() . '.' . $image->getClientOriginalExtension();
      
      $path = $image->storeAs('public/banner', $imageName);
      
      $imageData = new Dashboard();
      $imageData->image = $path;
      $imageData->save();
      
      return redirect()->back()->with('success', 'Image uploaded successfully.');
    } catch (\Exception $exp) {
      return back()->withErrors(['error' => 'An error occurred.']);
    }
  }
  
}
