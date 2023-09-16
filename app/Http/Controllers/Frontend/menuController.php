<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     */




     
    public function index()
    {

        $menus = Menu::all();
        $categories = Category::all();
        return view('Frontend.Menu.index',compact('menus','categories'));
    }

    public function menus_details($id)
    {
        $menus= menu::find($id);
     return view('Frontend.Menu.menu_details',compact('menus'));
    }

    public function add_cart(Request $request,$id)
    {
        if(Auth::id())
        {
           $user=Auth::user();
        //    dd($user);
        $menus=menu::find($id);
        $cart=new cart;
        $cart->name=$user->name;
        $cart->email=$user->email;
        $cart->phone=$user->phone;
        $cart->address=$user->address;
        $cart->user_id=$user->id;


        $cart->menus_name=$menus->name;
        $cart->image=$menus->image;
        $cart->price=$menus->price * $request->quantity;
        $cart->menus_id=$menus->id;
        $cart->quantity=$request->quantity;
        $cart->save();
        return redirect('show_cart');
        }
        else
        {
            return redirect('login');
        }
    }


    public function show_cart()
  
    {
       if(Auth::id())
      {
            $id=Auth::user()->id;
      $cart=cart::where('user_id','=',$id)->get();
      return view('Frontend.Menu.show_cart',compact('cart'));

       }
       else
       {
           return redirect('login');
      }
    }

    public function remove_cart($id)
    {
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message',' Deleted Successfully ');
    }

    
    public function cash_order()
    {
        $user=Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();
        foreach($data as $data)
        {
            $order=new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;


            $order->menus_name=$data->menus_name;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->menus_id=$data->menus_id;
            $order->payment_status='cash on delivery';
            $order->delivery_status='processing';

            $order->save();
            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();

        }
        return redirect()->back()->with('message','We have received your order. we will connect with you soon.....');
    }


    public function show_order()
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $userid=$user->id;
            $order=order::where('user_id','=',  $userid)->get();
            return view('Frontend.Menu.order',compact('order'));
        }
        else{
            return redirect('login');
        }
    }

    public function cancel_order($id)
    {
        $order=order::find($id);
        $order->delivery_status='Your Order has been canceled';
        $order->save();
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
