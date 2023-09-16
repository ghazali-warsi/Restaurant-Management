<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Order;
use App\Models\Feedback;
use PDF;
use Carbon\Carbon;

class AnalyticsController extends Controller
{
    //
    public function index()
    {
        $reservationTrends = Reservation::selectRaw('DATE(reservation_date) as date, COUNT(*) as count')
        ->groupBy('date')
        ->orderBy('date')
        ->get();

    $noShowCount = Reservation::where('status', 'cancelled')->count();
    $activeReservationsCount = Reservation::where('status', 'active')->count();
    
    // Calculate percentage of no-shows
    $totalReservationsCount = $noShowCount + $activeReservationsCount;
    $noShowPercentage = ($totalReservationsCount > 0) ? ($noShowCount / $totalReservationsCount) * 100 : 0;

    // Calculate average guest numbers
    $totalGuests = Reservation::sum('guest_number');
    $averageGuests = ($totalReservationsCount > 0) ? $totalGuests / $totalReservationsCount : 0;

    return view('analytics.index', compact('reservationTrends', 'noShowCount', 'activeReservationsCount', 'noShowPercentage', 'averageGuests'));    
    }

    public function generateReports(Request $request)
    {
        // Retrieve data for generating reports
        $date = now()->format('Y-m-d');
        $reservationTrends = Reservation::selectRaw('DATE(reservation_date) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();
    
    
    
        $noShowCount = Reservation::where('status', 'no_show')->count();
        $canceledCount = Reservation::where('status', 'canceled')->count();
        $activeReservationsCount = Reservation::where('status', 'active')->count();
    
        // Calculate percentage of no-shows
        $totalReservationsCount = $noShowCount + $canceledCount + $activeReservationsCount;
        $noShowPercentage = ($totalReservationsCount > 0) ? ($noShowCount / $totalReservationsCount) * 100 : 0;
    
        // Calculate average guest numbers
        $totalGuests = Reservation::sum('guest_number');
        $averageGuests = ($totalReservationsCount > 0) ? $totalGuests / $totalReservationsCount : 0;
    
        // Generate PDF report
        $pdf = PDF::loadView('reports.report_template', [
            'date' => $date,
            'reservationTrends' => $reservationTrends,
            'noShowCount' => $noShowCount,
            'canceledCount' => $canceledCount,
            'activeReservationsCount' => $activeReservationsCount,
            'noShowPercentage' => $noShowPercentage,
            'averageGuests' => $averageGuests,
        ]);
    
        return $pdf->download('restaurant_report_' . $date . '.pdf');
    }}














