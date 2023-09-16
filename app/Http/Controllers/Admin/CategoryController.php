<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use App\Models\Reservation;
use App\Models\Testimonial;
use App\Models\Menu;
use App\Models\Table;
use App\Models\Order;

class categoryController extends Controller
{
//     public function __construct()
// {
//     $this->middleware(['role:admin']);
// }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cat=Category::all();
        $totalReservations = Reservation::count();
        $totalOrder = Order::count();
        $totalmenu = Menu::count();
        $totaltable = Table::count();
        return view('dashboard.categories.index' ,compact('cat','totalReservations','totalOrder','totalmenu','totaltable'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create1()
    {
        return view('dashboard.categories.create1');
    }

    /**
     * Store a newly created resource in storage.
     */
        //
        public function store(CategoryStoreRequest $request)
        {
            //
            $request->validate([
                'name'          =>  'required',
                'description'         =>  'required',
                'image'     =>  'image|mimes:jpg,png,jpeg,gif,svg'
            ]);
    
            $file_name = time() . '.' . request()->image->getClientOriginalExtension();
    
            request()->image->move(public_path('images'), $file_name);
    
            $cat = new Category;
    
            $cat->name = $request->name;
            $cat->description = $request->description;
            $cat->image = $file_name;
    
            $cat->save();
    
            return redirect('/categories')->with('success', 'Category created successfully!');
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
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'      =>  'required',
            'description'     =>  'required',
            'image'     =>  'image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $image = $request->hidden_image;

        if($request->image != '')
        {
            $image = time() . '.' . request()->image->getClientOriginalExtension();

            request()->image->move(public_path('images'), $image);
        }

        $category = Category::find($request->hidden_id);

        $category->name = $request->name;

        $category->description = $request->description;

        $category->image = $image;

        $category->save();

        return redirect('/categories')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        Storage::delete($category->image);
        $category->menus()->detach();
        $category->delete();
        return redirect('/categories')->with('danger','Category deleted successfully!');
    }
}
