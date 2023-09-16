<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\user;
 use App\Models\Category;
 use App\Models\Reservation;
 use App\Models\Testimonial;
 use App\Models\Menu;
 use App\Models\Table;
 use App\Models\Order;

class adminController extends Controller
{
 
    //
    public function adminhome(){
        $cat=Category::all();
        $totalReservations = Reservation::count();
        $totalOrder =Order::count();
        $totalmenu = Menu::count();
        $totaltable = Table::count();
        return view('dashboard.index' ,compact('cat','totalReservations','totalOrder','totalmenu','totaltable'));
    }

    public function user(){
        $data=user::all();
        $totalReservations = Reservation::count();
        $totalOrder =Order::count();
        $totalmenu = Menu::count();
        $totaltable = Table::count();
        return view("dashboard.users",compact('data','totalReservations','totalOrder','totalmenu','totaltable'));
    }

    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

}
