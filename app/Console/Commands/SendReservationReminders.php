<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\Reservation; // Make sure the correct namespace is used


class SendReservationReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminders:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reservation reminder emails';

    /**
     * Execute the console command.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $reservations = Reservation::where('reservation_date', '>', now())
            ->where('reservation_date', '<', now()->addHour())
            ->where('reminder_sent', false)
            ->get();

        foreach ($reservations as $reservation) {
            // Send reminder email to $reservation->user
            Mail::to($this->reservation->user->email)->send(new ReservationReminder($this->reservation));
            // Mark the reservation as reminder_sent to avoid duplicate reminders
            $reservation->update(['reminder_sent' => true]);
        }
    }
}







