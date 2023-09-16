<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Category;
use App\Models\Reservation;
use App\Models\Menu;
use App\Models\Table;
use App\Models\Order;


class TestimonaialController extends Controller
{
    //
    public function home()
    {
        $testimonial=Testimonial::all();
        $user=User::all();
        return view ('Frontend.testimonials.customerreview' , compact('testimonial' , 'user'));
    }


    

    // testimonial start
    public function add_testimonial()
    {
        return view('Frontend.testimonials.testimonials');
    }

    public function save_testimonial(Request $request)
    
    {  

    $validatedData = $request->validate([
        'customer_content' => 'required',
    ]);

    $user_id = Auth::id(); 
    $data = new Testimonial;
    $data->user_id = $user_id;
    $data->customer_content = $request->customer_content;
    $data->save();
    
    return redirect('testimonial/home')->with('success' , 'Data has been added');
  }

        public function show()
        {
            $testimonial=Testimonial::all();
            $user=User::all();
            $totalReservations = Reservation::count();
            $totalOrder = Order::count();
            $totalmenu = Menu::count();
            $totaltable = Table::count();
            return view ('dashboard.show' , compact('testimonial' , 'user','totalReservations','totalOrder','totalmenu','totaltable'));

        }

        public function destroy(Testimonial $testimonial)
        {
            $testimonial->delete();
            return redirect('/review/show')->with('danger','Review deleted successfully!');
        }
}
