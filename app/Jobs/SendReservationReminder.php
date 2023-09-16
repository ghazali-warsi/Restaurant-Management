<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationReminder;
use Carbon\Carbon;
use App\Jobs;
use Illuminate\Support\Facades\Log;
use App\Models\Reservation;

class SendReservationReminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  
        //
        protected $reservation;

        public function __construct(Reservation $reservation)
        {
            $this->reservation = $reservation;
        }
    

    public function handle()
    {
       // Calculate the reminder time (1 hour before reservation)
       $remindTime = Carbon::parse($this->reservation->reservation_date)->subHour(1);

       // Check if the current time is before the reminder time
       if (Carbon::now()->lt($remindTime)) {
           // Send the reminder email
           Mail::to($this->reservation->email)->send(new ReservationReminder($this->reservation));
       }
        // Send reminder email to $this->reservation->user
    }
}
