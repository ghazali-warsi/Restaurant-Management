<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;
use App\Http\Requests\ReservationStoreRequest;
use App\Enums\TableStatus;
use Illuminate\Support\Carbon;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Menu;
use App\Models\Order;

class ReservationController extends Controller
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
        $reser=Reservation::all();
        $totalReservations = Reservation::count();
        $totalOrder = Order::count();
        $totalmenu = Menu::count();
        $totaltable = Table::count();
        return view('dashboard.Reservation.index' ,compact('reser','totalReservations','totalOrder','totalmenu','totaltable'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $table=Table::where('status', TableStatus::Avaliable)->get();
        return view('dashboard.Reservation.create' ,compact('table'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
        return back()->with('danger','Please choose the table base on guests!');
        }
        $request_date = Carbon::parse($request->reservation_date);
        foreach($table->reservations as $reser){
            if (Carbon::parse($reser->reservation_date)->format('Y-m-d') == $request_date->format('Y-m-d')) {

           
                return back()->with('danger','This table is reserveed for this date');
            }
        }
        Reservation::create($request->validated());
        return redirect('/reservation')->with('success','Reservation created successfully!');
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
    public function edit(Reservation $reservation)
    {
        //
        $table=Table::where('status', TableStatus::Avaliable)->get();
        return view('dashboard.Reservation.edit' ,compact('reservation','table'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        //
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
        return back()->with('danger','Please choose the table base on guests!');
        }
        $request_date = Carbon::parse($request->reservation_date);
        $reservations = $table->reservations()->where('id', '!=', $reservation->id)->get();
        foreach($reservations as $reser){
            if (Carbon::parse($reser->reservation_date)->format('Y-m-d') == $request_date->format('Y-m-d')) {
               return back()->with('danger','This table is reserveed for this date');
            }
        }
        $reservation->update($request->validated());
        return redirect('/reservation')->with('success','Reservation updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation  $reservation)
    {
        //
        $reservation->delete();
        return redirect('/reservation')->with('danger','Reservation deleted successfully!');
    }
}
