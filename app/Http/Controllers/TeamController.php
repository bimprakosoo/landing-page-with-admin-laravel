<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
  public function index()
  {
    $teams = Team::all();
    return view('team', [
      'page_title' => 'RekaDigi - Teams',
      'title' => 'Teams',
      'teams' => $teams,
    ]);
  }
  
  public function insert(Request $request)
  {
    try {
      $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'role' => 'required|string|max:255',
        'photo' => 'equired|image|mimes:jpeg,png,jpg,gif|max:2048', // max size of 2MB
      ]);
  
      $team = new Team;
      $team->name = $request->name;
      $team->role = $request->role;
  
      if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('public/team', $filename);
        $team->photo = $path;
      }
  
      $team->save();
      
      return redirect('/team')->with('success', 'Data inserted successfully.');
    } catch (\Exception $e) {
      return redirect('/team')->with('error', 'Failed to insert data. ' . $e->getMessage());
    }
  }
  
  public function delete($id) {
    try {
    $team = Team::find($id);
    $team->delete();
    
    return redirect('/team');
    } catch (\Exception $e) {
      return redirect('/team')->with('error', 'Failed to delete data. ' . $e->getMessage());
    }
  }
}
