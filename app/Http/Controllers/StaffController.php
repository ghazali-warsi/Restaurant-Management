<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Support\Facades\Storage;
use App\Models\Reservation;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Table;
use App\Models\Order;
use Illuminate\Http\Request;


class StaffController extends Controller
{
    //
    public function index()
    {
        $staffMembers = Staff::all();
        return view('staff.index', compact('staffMembers'));
    }

    
    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
    
        request()->image->move(public_path('images'), $file_name);

        $data = new Staff;
    
            $data->name = $request->name;
            $data->designation = $request->designation;
            $data->image = $file_name;
    
            $data->save();
    
        return redirect()->route('staff.dashindex')->with('success', 'Staff member added successfully.');
    }

    public function edit($id)
    {
        $staffMember = Staff::findOrFail($id);
        return view('staff.edit', compact('staffMember'));
    }

    public function update(Request $request, $id)
    {
        $staffMember = Staff::findOrFail($id);

        $data = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file_name = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $file_name);
            $data['image'] = $file_name;
        }

        $staffMember->update($data);

        return redirect()->route('staff.dashindex')->with('success', 'Staff member updated successfully.');
    }

    public function destroy($id)
{
    $staffMember = Staff::findOrFail($id);
    $staffMember->delete();

    return redirect()->route('staff.dashindex')->with('success', 'Staff member deleted successfully.');
}

    public function Dashindex()
    {
        $staffMembers = Staff::all();
        $totalReservations = Reservation::count();
        $totalOrder = Order::count();
        $totalmenu = Menu::count();
        $totaltable = Table::count();
        return view('staff.dashindex', compact('staffMembers','totalReservations','totalOrder','totalmenu','totaltable'));
    }
}
