<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\User;

class webController extends Controller
{
    //

  
    public function web()
    {
        $menus = Menu::all();
        $categories = Category::all();
        $testimonial=Testimonial::all();
        $user=User::all();
        return view('Frontend.web.index',compact('menus','categories','testimonial','user'));
    }
  
    
}
