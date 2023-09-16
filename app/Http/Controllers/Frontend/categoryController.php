<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class categoryController extends Controller
{
 public function index(){
  //
  $categories = Category::all();
  return view('Frontend.Category.index',compact('categories'));
 }
  

public function show($id)
{
    // Assuming you have a Category model and 'menus' relationship set up correctly
    $category = Category::with('menus')->findOrFail($id);

    return view('Frontend.Category.show', compact('category'));
}
}

