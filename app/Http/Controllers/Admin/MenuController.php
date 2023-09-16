<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Http\Requests\MenuStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Reservation;
use App\Models\Testimonial;
use App\Models\Table;
use App\Models\Order;
use PDF;

class MenuController extends Controller
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
        $menu=Menu::all();
        $totalReservations = Reservation::count();
        $totalOrder = Order::count();
        $totalmenu = Menu::count();
        $totaltable = Table::count();
        return view('dashboard.menus.index' ,compact('menu','totalReservations','totalOrder','totalmenu','totaltable'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cat=Category::all();
        $menu=Menu::all();
        return view('dashboard.menus.create' ,compact('cat','menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuStoreRequest $request)
    {
        //
        $request->validate([
            'name'          =>  'required',
            'description'         =>  'required',
            'price'         =>  'required',
            'image'     =>  'image|mimes:jpg,png,jpeg,gif,svg,webp'
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $file_name);

        $menu = new Menu;

        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->image = $file_name;

        $menu->save();

        if($request->has('categories')){
            $menu->categories()->attach($request->categories);
         }

        return redirect('/menus')->with('success', 'Menu created successfully!');
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
    public function edit(Menu $menu)
    {
        //
        $cat=Category::all();
        return view('dashboard.menus.edit' ,compact('cat','menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
         // Check if the menu item exists
    if (!$menu) {
        return redirect('/menus')->with('error', 'Menu not found.');
    }

    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'image' => 'image|mimes:jpg,png,jpeg,gif,svg'
    ]);

    $image = $request->hidden_image;

    if ($request->image != '') {
        $image = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $image);
    }

    // Update the menu properties
    $menu->name = $request->name;
    $menu->description = $request->description;
    $menu->price = $request->price;
    $menu->image = $image;

    // Save the changes
    $menu->save();

    if($request->has('categories')){
        $menu->categories()->sync($request->categories);
    }
    
    return redirect('/menus')->with('success', 'Menu updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
        Storage::delete($menu->image);
        $menu->categories()->detach();
        $menu->delete();
        return redirect('/menus')->with('danger','Menu deleted successfully!');
    }

    public function order()
    {
        $order=Order::all();
         $totalReservations = Reservation::count();
        $totalOrder = Order::count();
        $totalmenu = Menu::count();
        $totaltable = Table::count();
        return view('dashboard.menus.order',compact('order','totalReservations','totalOrder','totalmenu','totaltable'));
    }
    public function delivered($id)
    {
        $order=order::find($id);
        $order->delivery_status="delivered";
        $order->payment_status='Paid';
        $order->save();

        return redirect()->back();

    }
    public function print_pdf($id)
    {
        $order=order::find($id);
        $pdf=PDF::loadview('dashboard.menus.pdf',compact('order'));
        return $pdf->download('order_details.pdf');
    }
}
