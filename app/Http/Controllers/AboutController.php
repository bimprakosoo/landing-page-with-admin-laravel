<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index()
  {
    $abouts = About::all()->first();
    return view('about', [
      'page_title' => 'RekaDigi - About',
      'title' => 'About',
      'about' => $abouts,
    ]);
  }
  
  public function insert(Request $request)
  {
    try {
      $about = About::first();
      if (!$about) {
        $about = new About();
      }
      $about->description = $request->input('description');
      $about->visi = $request->input('visi');
      $about->misi = $request->input('misi');
      $about->save();
  
      $message = ($about->wasRecentlyCreated ? 'About data has been created!' : 'About data has been updated!');
      return redirect('/about')->with('success', $message);
    } catch (\Exception $e) {
      return redirect('/about')->with('error', 'Failed to update about data: ' . $e->getMessage());
    }
  }
}
