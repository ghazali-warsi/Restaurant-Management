<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use PDF;

class FeedbackAnalyticsController extends Controller
{
   
    public function showAnalytics()
    {
        $feedbackAnalysis = Testimonial::analyzeFeedback();
        return view('feedback-analytics', compact('feedbackAnalysis'));
    }

    public function generateReport()
    {
        $feedbackAnalysis = Testimonial::analyzeFeedback();
        $pdf = PDF::loadView('feedback-analytics', compact('feedbackAnalysis'));

        return $pdf->download('feedback-analytics-report.pdf');
    }
}
