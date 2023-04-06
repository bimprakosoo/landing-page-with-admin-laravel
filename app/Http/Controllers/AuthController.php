<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function index()
  {
    return view('template.login');
  }
  
  public function store()
  {
    try {
      $attributes = request()->validate([
        'email' => 'required|email',
        'password' => 'required'
      ]);
      
      if (Auth::attempt($attributes)) {
        session()->regenerate();
        return redirect('dashboard')->with(['success' => 'You are logged in.']);
      } else {
        return back()->withErrors(['email' => 'Email or password invalid.']);
      }
    } catch (\Exception $exp) {
      return back()->withErrors(['error' => 'An error occurred.']);
    }
  }
}
