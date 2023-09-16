<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
       }

       public static function analyzeFeedback()
       {
           // Get all feedback records from the database
           $feedbackRecords = Testimonial::all();
           
           $totalFeedbackCount = $feedbackRecords->count();
           
           // Count positive and negative feedback
           $positiveFeedbackCount = $feedbackRecords->where('rating', '>=', 4)->count();
           $negativeFeedbackCount = $feedbackRecords->where('rating', '<', 4)->count();
           
           // Calculate the percentage of positive and negative feedback
           $positiveFeedbackPercentage = ($positiveFeedbackCount / $totalFeedbackCount) * 100;
           $negativeFeedbackPercentage = ($negativeFeedbackCount / $totalFeedbackCount) * 100;
           
           // You can add more analysis here, like identifying common themes or trends
           
           $analysis = [
               'total_feedback_count' => $totalFeedbackCount,
               'positive_feedback_count' => $positiveFeedbackCount,
               'negative_feedback_count' => $negativeFeedbackCount,
               'positive_feedback_percentage' => $positiveFeedbackPercentage,
               'negative_feedback_percentage' => $negativeFeedbackPercentage,
               // Add more analysis results here
           ];
           
           return $analysis;
       }
}
