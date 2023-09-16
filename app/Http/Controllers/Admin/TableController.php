<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
use App\Http\Requests\TableStoreRequest;
use App\Enums\TableLocation;
use App\Enums\TableStatus;
use App\Models\Category;
use App\Models\Reservation;
use App\Models\Testimonial;
use App\Models\Menu;
use App\Models\Order;

class TableController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['role:admin']);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $table=Table::all();
        $totalReservations = Reservation::count();
        $totalOrder = Order::count();
        $totalmenu = Menu::count();
        $totaltable = Table::count();
        return view('dashboard.Table.index' ,compact('table','totalReservations','totalOrder','totalmenu','totaltable'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
      
            //
            return view('dashboard.Table.create');
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'guest_number'=>'required',
            'price'=>'required',
            'status'=>'required',
            'location'=>'required',
        ]);
        $table=new Table();
        $table->name=$request->name;
        $table->guest_number=$request->guest_number;
        $table->price=$request->price;
        $table->status=$request->status;
        $table->location=$request->location;

        $table->save();
        return redirect('/tables')->with('success','Table created successfully!');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Table $table)
    {
        //
        return view('dashboard.Table.edit' ,compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $table=Table::find($id);
        $table->name=$request->input('name');
        $table->guest_number=$request->input('guest_number');
        $table->price=$request->input('price');
        $table->status=$request->input('status');
        $table->location=$request->input('location');
        $table->save();
        return redirect('/tables')->with('success','Table updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        $table->delete();
        return redirect('/tables')->with('danger','Table deleted successfully!');
    }
}
