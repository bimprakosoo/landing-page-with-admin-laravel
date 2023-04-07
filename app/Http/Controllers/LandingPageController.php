<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Dashboard;
use App\Models\Product;
use App\Models\Team;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
  public function index()
  {
    $teams = Team::all();
    $dashboard = Dashboard::all()->first();
    $abouts = About::all()->first();
    $products = Product::all();
    return view('landing_page', [
      'team' => $teams,
      'dashboard' => $dashboard,
      'about' => $abouts,
      'product' => $products
    ]);
  }
}
